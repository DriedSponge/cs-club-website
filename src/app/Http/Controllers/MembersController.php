<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MembersController extends Controller
{
    public function index(Request $request){
        $members = $this->members();
        if($request->get("json")){
            $members = $members->keyBy('name');
            return response()->json(['officers'=>$members->where('title')->toArray(),'members'=>$members->whereNull('title')->sortBy('name')->toArray()],200);
        }

        return view("pages.members")->with(['officers'=>$members->where('title')->toArray(),'members'=>$members->whereNull('title')->sortBy('name')->toArray()]);
    }

    public function api(){
        $members = $this->members()->keyBy("name");
        return response()->json([
            'officers'=>$members->where('title')->toArray(),
            'members'=>$members->whereNull('title')->sortBy('name')->toArray()],
            200);
    }
    public function apimember($member){
        $member = $this->members()->first(function ($value, $key) use ($member) {
            return Str::contains($value['name'],$member);
        });
        if(!$member){
            return response()->json(['error'=>"Member not found"],404);
        }
        return response()->json($member);
    }

    private function members(){
        $members = collect([
            ["name"=>"Claire Li","img"=>"claire.jpg","title"=>"External Vice President"],
            ["name"=>"Nathan Hendrickson","title"=>"Internal Vice President"],
            ["name"=>"Wyatt Ford","img"=>"wyatt.jpg","title"=>"Secretary"],
            ["name"=>"Roshan Skariah","img"=>"roshan.jpg", "title"=>"Treasurer"],
            ["name"=>"Yasmine Shubber","title"=>"Event Coordinator"],
            ["name"=>"Sathvik","img"=>"sathvik.jpg","title"=>"Webmaster"],
            ["name"=>"Manas Kumar","title"=>"Webmaster"],
            ["name"=>"Dash Pickrell","img"=>"dash.jpg","title"=>"Fundraising Chair"],
            ["name"=>"Michelle Li","title"=>"Public Relations"],
            ["name"=>"Areeb Emran","img"=>"areeb.jpg"],
            ["name"=>"Jong-Hyun Lee"],
            ["name"=>"Yasmine Shubber"],
            ["name"=>"Kaden Allen"],
            ["name"=>"Yashwant Datti"],
            ["name"=>"Alex Dimov"],
            ["name"=>"Shunzo Hida"],
            ["name"=>"Ivan Labovich"],
            ["name"=>"Emily Pham"],
            ["name"=>"Amanda Sim"],
            ["name"=>"Khushi Singh"],
            ["name"=>"Jordan Tucker"],
            ["name"=>"Radu Holka"]
        ]);

        $members->transform(function ($item) {
            if(!isset($item['img'])){
                $item['img']= "blank-user.gif";
            }
            $item['img']= asset("imgs/members/".$item['img']);
            return $item;
        });

        return $members;
    }
}
