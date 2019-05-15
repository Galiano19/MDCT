<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Character;

class CharacterController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}


    public function store(Request $request){

        if(Auth::check()){
            $request->validate([
                'hitpoints' => 'required|max:255',
                'ac' => 'required|max:2',
                'str' => 'required|max:2',
                'dex' => 'required|max:2',
                'con' => 'required|max:2',
                'inte' => 'required|max:2',
                'wis' => 'required|max:2',
                'cha' => 'required|max:2',
                'back' => 'required',
                'name' => 'required|max:255',
            ]);

            $character = new Character;

            $character->level = $request->input('level');
        
            $character->prof = 2;
        
            $character->user_id=\Auth::user()->id;

            $character->hitpoints = $request->input('hitpoints');
            $character->ac = $request->input('ac');
            $character->str = $request->input('str');
            $character->dex = $request->input('dex');
            $character->con = $request->input('con');
            $character->inte = $request->input('inte');
            $character->wis = $request->input('wis');
            $character->cha = $request->input('cha');
            $character->st_str = $request->input('st_str');
            $character->st_dex = $request->input('st_dex');
            $character->st_con = $request->input('st_con');
            $character->st_inte = $request->input('st_inte');
            $character->st_wis = $request->input('st_wis');
            $character->st_cha = $request->input('st_cha');
            $character->acrobatics = $request->input('acrobatics');
            $character->animalhan = $request->input('animalhan');
            $character->arcana = $request->input('arcana');
            $character->athletics = $request->input('athletics');
            $character->deception = $request->input('deception');
            $character->history = $request->input('history');
            $character->insight = $request->input('insight');
            $character->intimidation = $request->input('intimidation');
            $character->investigation = $request->input('investigation');
            $character->medicine = $request->input('medicine');
            $character->nature = $request->input('nature');
            $character->perception = $request->input('perception');
            $character->performance = $request->input('performance');
            $character->persuasion = $request->input('persuasion');
            $character->religion = $request->input('religion');
            $character->soh = $request->input('soh');
            $character->stealth = $request->input('stealth');
            $character->survival = $request->input('survival');
            $character->name = $request->input('name');
            $character->class = $request->input('class');
            $character->color = $request->input('color');
            $character->back = $request->input('back');
            $character->save();
            return view('characters.index');
        }else{
            return view('welcome');
        }

        
    }

    public function update(Request $request, $charid){

        if(Auth::check()){
            $request->validate([
                'hitpoints' => 'required|max:255',
                'ac' => 'required|max:2',
                'str' => 'required|max:2',
                'dex' => 'required|max:2',
                'con' => 'required|max:2',
                'inte' => 'required|max:2',
                'wis' => 'required|max:2',
                'cha' => 'required|max:2',
                'back' => 'required',
                'name' => 'required|max:255',
            ]);



            $character = Character::find($charid);

            $character->level = $request->input('level');
        
            $character->prof = 2;
        
            $character->user_id=\Auth::user()->id;

            $character->hitpoints = $request->input('hitpoints');
            $character->ac = $request->input('ac');
            $character->str = $request->input('str');
            $character->dex = $request->input('dex');
            $character->con = $request->input('con');
            $character->inte = $request->input('inte');
            $character->wis = $request->input('wis');
            $character->cha = $request->input('cha');
            $character->st_str = $request->input('st_str');
            $character->st_dex = $request->input('st_dex');
            $character->st_con = $request->input('st_con');
            $character->st_inte = $request->input('st_inte');
            $character->st_wis = $request->input('st_wis');
            $character->st_cha = $request->input('st_cha');
            $character->acrobatics = $request->input('acrobatics');
            $character->animalhan = $request->input('animalhan');
            $character->arcana = $request->input('arcana');
            $character->athletics = $request->input('athletics');
            $character->deception = $request->input('deception');
            $character->history = $request->input('history');
            $character->insight = $request->input('insight');
            $character->intimidation = $request->input('intimidation');
            $character->investigation = $request->input('investigation');
            $character->medicine = $request->input('medicine');
            $character->nature = $request->input('nature');
            $character->perception = $request->input('perception');
            $character->performance = $request->input('performance');
            $character->persuasion = $request->input('persuasion');
            $character->religion = $request->input('religion');
            $character->soh = $request->input('soh');
            $character->stealth = $request->input('stealth');
            $character->survival = $request->input('survival');
            $character->name = $request->input('name');
            $character->color = $request->input('color');
            $character->back = $request->input('back');
            $character->save();
            return view('characters.index');
        }else{
            return view('welcome');
        }

        
    }

    public function getCharacters(){
        
        if(Auth::check()){
            $id =\Auth::user()->id;
            $characters = Character::where('user_id', '=', $id)->get();
            return view('characters.showall', array('characters'=>$characters));
        }else{
            return view('welcome');
        }
    }

    public function indexCharacters(){
        if(Auth::check()){
            return view('characters.index');
        }else{
            return view('welcome');
        }
        
    }

    public function createCharacters(){
        if(Auth::check()){
            return view('characters.create');
        }else{
            return view('welcome');
        }
        
    }
    

    public function modifyCharacters($charid){
        $id =\Auth::user()->id;
        $character = Character::find($charid);
        if ($id==$character->user_id){
            return view('characters.modify', array('character'=>$character));
        }else{
            return view('welcome');
        }
        
    }
}
