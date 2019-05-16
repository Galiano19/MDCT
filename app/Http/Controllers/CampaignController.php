<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Character;
use App\Campaign;
use App\Role;
use Illuminate\Support\Facades\DB;
class CampaignController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
}


public function indexCampaigns(){
        
    if(Auth::check()){
        
        $id =\Auth::user()->id;
        //$role = Role::where('user_id', '=', $id)->get();
        //$campaigns = Campaign::where('id', '=', $role->campaign_id)->get();
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
}
