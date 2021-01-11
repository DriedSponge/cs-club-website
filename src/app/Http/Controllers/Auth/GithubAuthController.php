<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;
use const http\Client\Curl\Features\HTTP2;

class GithubAuthController extends Controller
{
    public function invite(Request $request)
    {
        $github_response = Socialite::driver('github')->user();
        $headers = [
            'Authorization' => "token " . config('github.token'),
            'Accept' => "application/vnd.github.v3+json"
        ];
        $user_headers = [
            'Authorization' => "token " .$github_response->token,
            'Accept' => "application/vnd.github.v3+json"
        ];

        // Check if the user already is a colaborator on the repo
        $repo_members = Http::withHeaders($headers)->get("https://api.github.com/repos/DriedSponge/cs-club-website/collaborators/".$github_response->nickname);
        if($repo_members->failed()){

            // Get the invites a user has and check if they already have one for the repo
            $invites = Http::withHeaders($user_headers)->get("https://api.github.com/user/repository_invitations")->json();
            if(!empty($invites)){
                foreach ($invites as $invite){
                    if($invite['repository']['id'] == 308166107){
                        $accpet_invite = Http::withHeaders($user_headers)->asForm()->patch('https://api.github.com/user/repository_invitations/'.$invite['id']);
                        if($accpet_invite->failed()){
                            return $this->returnResponse('warn',
                                'Then invite was successfully sent, but the system failed to accept it for you, you can accept it <a target="_blank" href="https://github.com/DriedSponge/cs-club-website/invitations">here</a>.');
                        }
                        return $this->returnResponse('success',
                            'The invite was successfully sent and accepted! You can open the repository <a target="_blank" href="https://github.com/DriedSponge/cs-club-website/">here</a>!');
                    }
                }
            }

            // Sends the invite and attempts to accept it
            $invite = Http::withHeaders($headers)->put('https://api.github.com/repos/DriedSponge/cs-club-website/collaborators/' . $github_response->nickname,
                ["permission" => "pull"]
            );

            if($invite->successful()){
                $invite = $invite->json();
                $accpet_invite = Http::withHeaders($user_headers)->asForm()->patch('https://api.github.com/user/repository_invitations/2'.$invite['id']);
                if($accpet_invite->failed()){
                    return $this->returnResponse('warn',
                        'Then invite was successfully sent, but the system failed to accept it for you, you can accept it <a target="_blank" href="https://github.com/DriedSponge/cs-club-website/invitations">here</a>.');
                }
                return $this->returnResponse('success',
                    'The invite was successfully sent and accepted! You can open the repository <a target="_blank" href="https://github.com/DriedSponge/cs-club-website/">here</a>!');
            }
            return $this->returnResponse('error','The automatic invite failed to send! Please try again later or contact Jordan to send you an invite manually. (this usually occurs when we hit the github api limit)');

        }else{
            return $this->returnResponse('error','You are already a collaborator on this repository! You can view it here <a target="_blank" href="https://github.com/DriedSponge/cs-club-website/">here</a>.');
        }

    }

    public function returnResponse($status,$message){
        return response()->redirectTo(route('projects'))->with($status,$message);
    }
}
