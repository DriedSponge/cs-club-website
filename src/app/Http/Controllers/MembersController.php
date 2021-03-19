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
            ["name"=>"Sathvik","title"=>"Internal Vice President","img"=>"sathvik.jpg"],
            ["name"=>"Adit Gupta","title"=>"External Vice President","img"=>"adit.jpg"],
            ["name"=>"Claire Li","title"=>"Secretary","img"=>"claire.jpg"],
            ["name"=>"Roshan Skariah","title"=>"Treasurer","img"=>"roshan.jpg"],
            ["name"=>"Dash Pickrell","title"=>"Treasurer","img"=>"dash.jpg"],
            ["name"=>"Yasmine Shubber","title"=>"Public Relations"],
            ["name"=>"Wyatt Ford","title"=>"Webmaster","img"=>"wyatt.jpg"],
            ["name"=>"Nathan Hendrickson","title"=>"Co-Events Chair"],
            ["name"=>"Areeb Emran","title"=>"Co-Events Chair","img"=>"areeb.jpg"],
            ["name"=>"Jong-Hyun Lee","title"=>"Fundraising Chair"],
            ["name"=>"Yasmine Shubber"],
            ["name"=>"Kaden Allen"],
            ["name"=>"Yashwant Datti"],
            ["name"=>"Alex Dimov"],
            ["name"=>"Shunzo Hida"],
            ["name"=>"Manas Kumar"],
            ["name"=>"Ivan Labovich"],
            ["name"=>"Michelle Li"],
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
