<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
       if(!Storage::exists('/github/recent_commits.json') or time() - Storage::lastModified('/github/recent_commits.json') > 300){
            $authtoken = config('github.token');
            if($authtoken == "public"){
                $headers = [
                    'Accept'=>"application/vnd.github.v3+json"
                ];
            }else{
                $headers = [
                    'Authorization'=>"token ".config('github.token'),
                    'Accept'=>"application/vnd.github.v3+json"
                ];
            }
           $commits = Http::withHeaders($headers)->get('https://api.github.com/repos/DriedSponge/cs-club-website/commits?per_page=5');
           Storage::put('/github/recent_commits.json',$commits);
           $commits = $commits->json();
        }else{
            $commits = json_decode(Storage::get('/github/recent_commits.json'),true);
        }

        $commits = collect($commits);
        $commits = $commits->whereNotNull('author');
        $commits->transform(function ($item) {
            return Arr::dot($item);
        });

        $lastupdated = Storage::lastModified('/github/recent_commits.json');
        return view('pages.home',['commits'=>$commits->toArray(),'lastupdated'=>$lastupdated]);
    }
}
