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

        $repo_members = Http::withHeaders($headers)->get("https://api.github.com/repos/DriedSponge/cs-club-website/collaborators/".$github_response->nickname);

        if($repo_members->status() == 404){

            $invite = Http::withHeaders($headers)->put('https://api.github.com/repos/DriedSponge/cs-club-website/collaborators/' . $github_response->nickname,
                ["permission" => "pull"]
            )->json();
            $accpet_invite = Http::withHeaders($user_headers)->asForm()->patch('https://api.github.com/user/repository_invitations/2'.$invite['id']);
            if($accpet_invite->failed()){
                return response()->redirectTo(route('projects'))->with('warn',
                    'Then invite was successfully sent, but the system failed to accept it for you, you can accept it <a target="_blank" href="https://github.com/DriedSponge/cs-club-website/invitations">here</a>.');
            }
        }else{
            return response()->redirectTo(route('projects'))->with('error','You are already a collaborator on this repository! You can view it here ');
        }


    }
}
