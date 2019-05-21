<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Character;
use App\Campaign;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class CampaignController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }


    public function indexCampaigns(){
            
        if(Auth::check()){
            
            $id =\Auth::user()->id;
            $campaigns =  DB::table('campaigns')
                ->join('roles','roles.campaign_id', '=', 'id')
                ->join('users','users.id', '=', 'roles.user_id')
                ->where('users.id', '=', $id)
                ->get();
            return view('campaigns.index', array('campaigns'=>$campaigns));
        }else{
            return view('welcome');
        }
    }

    public function createCampaigns(){
            
        if(Auth::check()){
            
            
            return view('campaigns.create');
        }else{
            return view('welcome');
        }
    }

    public function store(Request $request){

        if(Auth::check()){
            $request->validate([
                'name' => 'required|max:255',
                'description' => 'required|max:255',
            ]);

            $maxValue = Campaign::orderBy('id', 'desc')->value('id');

            $campaign = new Campaign;
            $campaign->name = $request->input('name');
            $campaign->description = $request->input('description');
            $campaign->code = Hash::make($maxValue);
            $campaign->save();

            $role = new Role;
            $role->campaign_id = $maxValue+1;
            $role->user_id = \Auth::user()->id;
            $role->role = 0;
            $role->save();
            
            return back();
        }else{
            return view('welcome');
        }

        
    }

    public function checkCampaign($campid){
        $id =\Auth::user()->id;
        $campaign = Campaign::find($campid);

        $users = DB::table('users')
        ->join('roles','roles.user_id', '=', 'users.id')
        ->join('campaigns','campaigns.id', '=', 'roles.campaign_id')
        ->where('campaigns.id', '=', $campid)
        ->get();

        $roleuser = DB::table('roles')
        ->join('users','users.id', '=', 'roles.user_id')
        ->join('campaigns','campaigns.id', '=', 'roles.campaign_id')
        ->where('campaigns.id', '=', $campid)
        ->where('users.id', '=', $id)
        ->get();

        $usercheck = DB::table('campaigns')
        ->join('roles','roles.campaign_id', '=', 'id')
        ->join('users','users.id', '=', 'roles.user_id')
        ->where('users.id', '=', $id)
        ->where('campaigns.id', '=', $campid)
        ->first();

        if($usercheck==null){
            return redirect()->action('CampaignController@indexCampaigns');
        }else{
            return view('campaigns.check', compact('users','campaign','roleuser'));
        }

        
        
    }

    public function joinCampaign(Request $request){
        $userid =\Auth::user()->id;
        $code = $request->input('code');
        $campaign = Campaign::where('code', '=', $code)->firstOrFail();

        $role = new Role;
        $role->campaign_id = $campaign->id;
        $role->user_id = $userid;
        $role->role = 1;
        $role->save();

        return back();
        
        
    }

    public function prejoinCampaign(){
        return view('campaigns.prejoin');
    }


}
