<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Character;
use App\Campaign;
use App\Role;
use App\Encounter;
use App\Log;
use App\State;
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

            $encountname = DB::table('encounters')
            ->where('encounters.name', '=', $encounter->name)
            ->where('encounters.campaign_id', '=', $campid)
            ->first();

            $log = new Log;
            $log->encounter_id = $encounter->id;
            $log->save();

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

    public function enterPlayerEncounter($encid){
            
        if(Auth::check()){
            $id =\Auth::user()->id;

            $encounters = DB::table('encounters')
            ->where('encounters.id', '=', $encid)
            ->first();

            $log = DB::table('logs')
            ->where('logs.encounter_id', '=', $encid)
            ->first();
            
            $usercheck = DB::table('campaigns')
            ->join('roles','roles.campaign_id', '=', 'id')
            ->join('users','users.id', '=', 'roles.user_id')
            ->where('users.id', '=', $id)
            ->where('campaigns.id', '=', $encounters->campaign_id)
            ->first();

            

            $characters = DB::table('characters')
            ->join('users','users.id', '=', 'user_id')
            ->where('users.id', '=', $id)
            ->get();

            $stopit = 0;

            foreach($characters as $character){
                $states = DB::table('states')
                ->join('characters','characters.id', '=', 'states.character_id')
                ->join('logs','logs.id', '=', 'states.log_id')
                ->where('logs.id', '=', $log->id)
                ->where('characters.id', '=', $character->id)
                ->first();

                if($states!=null||$stopit==1){
                    $stopit = 1;
                }
            }

            $usersencs = DB::table('users')
            ->join('roles','roles.user_id', '=', 'users.id')
            ->join('campaigns','campaigns.id', '=', 'roles.campaign_id')
            ->where('campaigns.id', '=', $encounters->campaign_id)
            ->select('users.id')
            ->get();

            $charasinenc = collect();
            $charaget = collect();

            $usercount = 0;
            
            foreach($usersencs as $userenc){
                $stopit2 = 0;
                $charas = DB::table('characters')
                ->join('users','users.id', '=', 'user_id')
                ->where('users.id', '=', $userenc->id)
                ->get();
                
                foreach($charas as $chara){

                    if($stopit2==0){
                        $statechara = DB::table('states')
                        ->join('characters','characters.id', '=', 'states.character_id')
                        ->join('logs','logs.id', '=', 'states.log_id')
                        ->where('logs.id', '=', $log->id)
                        ->where('characters.id', '=', $chara->id)
                        ->first();
                    }

                    
                    
                    if($statechara!=null){
                        $stopit2 = 1;
                        $usercount+=1;
                        $charasinenc->push($charaget);
                    }

                }
            }

    
            if($usercheck==null){
                
                return redirect()->action('CampaignController@indexCampaigns');

            }else{
                if($stopit==1){



                    return view('encounters.encounter', compact('encounters','charasinenc','usercount'));
                }else{
                    return view('encounters.selectCharacter', compact('encounters','characters','encid'));
                }
                
            }


            
        }else{
            return view('welcome');
        }
    }

    public function insertCharacter(Request $request, $encid){

        if(Auth::check()){

            $logs = DB::table('logs')
            ->where('logs.encounter_id', '=', $encid)
            ->first();

            $character = DB::table('characters')
            ->where('characters.id', '=', $request->input('name'))
            ->first();
            
            $state = new State;

            $state->character_id = $request->input('name');
            $state->log_id = $logs->id;
            $state->hitpoints = $character->hitpoints;
            $state->save();

            

            return back();
        }else{
            return view('welcome');
        }

        
    }

}
