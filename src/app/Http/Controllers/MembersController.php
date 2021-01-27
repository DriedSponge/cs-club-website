<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MembersController extends Controller
{
    public function index(Request $request){
        $members = collect([
            ["name"=>"Sathvik","title"=>"Internal Vice President","img"=>"sathvik.jpg"],
            ["name"=>"Adit Gupta","title"=>"External Vice President","img"=>"adit.jpg"],
            ["name"=>"Clair Li","title"=>"Secretary"],
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
        ]);

        $members->transform(function ($item) {
            if(!isset($item['img'])){
                $item['img']= "blank-user.gif";
            }
            $item['img']= asset("imgs/members/".$item['img']);
            return $item;
        });

        if($request->get("json")){
            $members = $members->keyBy('name');
            return response()->json(['officers'=>$members->where('title')->toArray(),'members'=>$members->whereNull('title')->toArray()],200);
        }

        return view("pages.members")->with(['officers'=>$members->where('title')->toArray(),'members'=>$members->whereNull('title')->toArray()]);
    }
}
