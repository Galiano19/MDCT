<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Character;
use App\Campaign;
use App\Role;
use App\Encounter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class EncounterController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }


    public function createEncounter($campid){
            
        if(Auth::check()){
            $id =\Auth::user()->id;
            
            $usercheck = DB::table('campaigns')
            ->join('roles','roles.campaign_id', '=', 'id')
            ->join('users','users.id', '=', 'roles.user_id')
            ->where('users.id', '=', $id)
            ->where('campaigns.id', '=', $campid)
            ->where('roles.role', '=', 0)
            ->first();
    
            if($usercheck==null){
                return redirect()->action('CampaignController@indexCampaigns');
            }else{
                return view('encounters.create', compact('campid'));
            }


            
        }else{
            return view('welcome');
        }
    }

    public function store(Request $request, $campid){

        if(Auth::check()){
            $request->validate([
                'name' => 'required|max:255',
            ]);

            $encounter = new Encounter;

            $encounter->name = $request->input('name');
            $encounter->opt_st = $request->input('opt_st');
            $encounter->opt_hp = $request->input('opt_hp');
            $encounter->opt_tracking = $request->input('opt_tracking');
            $encounter->opt_abilities = $request->input('opt_abilities');
            $encounter->campaign_id = $campid;
            $encounter->save();
            
            return back();
        }else{
            return view('welcome');
        }

        
    }

    public function enterEncounter($encid){
            
        if(Auth::check()){
            $id =\Auth::user()->id;

            $encounters = DB::table('encounters')
            ->where('encounters.id', '=', $encid)
            ->first();
            
            $usercheck = DB::table('campaigns')
            ->join('roles','roles.campaign_id', '=', 'id')
            ->join('users','users.id', '=', 'roles.user_id')
            ->where('users.id', '=', $id)
            ->where('campaigns.id', '=', $encounters->campaign_id)
            ->first();
    
            if($usercheck==null){
                return redirect()->action('CampaignController@indexCampaigns');
            }else{
                return view('encounters.encounter', compact('encounters'));
            }


            
        }else{
            return view('welcome');
        }
    }

}
