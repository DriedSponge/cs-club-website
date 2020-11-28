<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        $commits = Http::withHeaders([
            'Authorization'=>"token ".config('github.token'),
            'Accept'=>"application/vnd.github.v3+json"
        ])->get('https://api.github.com/repos/DriedSponge/cs-club-website/commits?per_page=5');
        return view('pages.home')->with("commits",$commits->json());
    }
}
