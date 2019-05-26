@extends('layouts.lobby')

@section('content')
<div class="createCharacter fullpage">
    <div class="container" >
        <form method="POST" action="{{ action('CharacterController@update',['charid' => $character->id]) }}">
            {{ csrf_field() }}

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row justify-content-center">
                <h3 class="mt-4">Header Stats</h3>
            </div>
            <div class="row justify-content-between">
                <div class="col-12">
                    <label class="mt-1" for="name">Character name</label>
                    <input type="text" class="form-control" name="name" id="name" value ="{{$character->name}}">
                </div>
                <div class="col-sm-2">
                    <label class="mt-1" for="">Armor Class</label>
                    <input type="text" class="form-control" name="ac" id="ac" value ="{{$character->ac}}">   
                </div>
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Hit Points</label>
                    <input type="number" class="form-control" name="hitpoints" id="hitpoints" value ="{{$character->hitpoints}}">
                </div>   
                <div class="col-sm-2">
                    <label class="mt-1" for="">Level</label>
                    <input type="number" class=" form-control" name="level" id="level" value ="{{$character->level}}">
                </div> 
                <div class="col-sm-4">
                    <label class="mt-1" for="">Class</label>
                    <select class=" form-control" name="class" value ="{{$character->class}}">
                        <option value="Rogue">Rogue</option>
                        <option value="Wizard">Wizard</option>
                        <option value="Fighter">Fighter</option>
                        <option value="Warrior">Warrior</option>
                        <option value="Sorcerer">Sorcerer</option>
                        <option value="Barbarian">Barbarian</option>
                        <option value="Mystic">Mystic</option>
                        <option value="Artificer">Artificer</option>
                        <option value="Monk">Monk</option>
                        <option value="Warlock">Warlock</option>
                        <option value="Bard">Bard</option>
                        <option value="Ranger">Ranger</option>
                        <option value="Cleric">Cleric</option>
                        <option value="Druid">Druid</option>
                        <option value="Paladin">Paladin</option>
                    </select>
                </div>         
            </div>           
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mt-4">Stats</h3>
            </div>
            <div class="row flex-wrap justify-content-between">
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">STRENGTH</label>
                    <input type="number" name="str" id="str" class="form-control" value ="{{$character->str}}">
                </div> 
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">DEXTERITY</label>
                    <input type="number" name="dex" id="dex" class="form-control"  value ="{{$character->dex}}">
                </div> 
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">CONSTITUTION</label>
                    <input type="number" name="con" id="con" class="form-control" value ="{{$character->con}}">
                </div> 
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">INTELLIGENCE</label>
                    <input type="number" name="inte" id="inte" class="form-control" value ="{{$character->inte}}">
                </div> 
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">WISDOM</label>
                    <input type="number" name="wis" id="wis" class="form-control" value ="{{$character->wis}}">
                </div> 
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">CHARISMA</label>
                    <input type="number" name="cha" id="cha" class="form-control" value ="{{$character->cha}}">
                </div> 
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mt-4">Saving Throws</h3>
            </div>
            <div class="row flex-wrap justify-content-between">
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">STRENGTH</label>
                    <select name="st_str" class="form-control">
                        @if ($character->st_str==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">DEXTERITY</label>
                    <select name="st_dex" class="form-control">
                        @if ($character->st_dex==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">CONSTITUTION</label>
                    <select name="st_con" class="form-control" >
                        @if ($character->st_con==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">INTELLIGENCE</label>
                    <select name="st_inte" class="form-control" >
                        @if ($character->st_inte==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">WISDOM</label>
                    <select name="st_wis" class="form-control" >
                        @if ($character->st_wis==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">CHARISMA</label>
                    <select name="st_cha" class="form-control" >
                        @if ($character->st_cha==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select>
                </div> 
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mt-4" >Skills</h3>
            </div>
            <div class="row justify-content-between">
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Acrobatics</label>
                    <select name="acrobatics" class="form-control" placeholder="Acrobatics">
                        @if ($character->acrobatics==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->acrobatics==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Animal Handling</label>
                    <select name="animalhan" class="form-control" placeholder="Animal Handling">
                        @if ($character->animalhan==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->animalhan==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Arcana</label>
                    <select name="arcana" class="form-control" placeholder="Arcana">
                        @if ($character->arcana==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->arcana==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Athletics</label>
                    <select name="athletics" class="form-control" placeholder="Athletics">
                        @if ($character->athletics==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->athletics==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Deception</label>
                    <select name="deception" class="form-control" placeholder="Deception">
                        @if ($character->deception==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->deception==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">History</label>
                    <select name="history" class="form-control" placeholder="History">
                        @if ($character->history==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->history==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Insight</label>
                    <select name="insight" class="form-control" placeholder="Insight">
                        @if ($character->insight==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->insight==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Intimidation</label>
                    <select name="intimidation" class="form-control" placeholder="Intimidation">
                        @if ($character->intimidation==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->intimidation==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Investigation</label>
                    <select name="investigation" class="form-control" placeholder="Investigation">
                        @if ($character->investigation==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->investigation==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Medicine</label>
                    <select name="medicine" class="form-control" placeholder="Medicine">
                        @if ($character->medicine==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->medicine==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Nature</label>
                    <select name="nature" class="form-control" placeholder="Nature">
                        @if ($character->nature==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->nature==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Perception</label>
                    <select name="perception" class="form-control" placeholder="Perception">
                        @if ($character->perception==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->perception==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Performance</label>
                    <select name="performance" class="form-control" placeholder="Performance">
                        @if ($character->performance==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->performance==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Persuasion</label>
                    <select name="persuasion" class="form-control" placeholder="Persuasion">
                        @if ($character->persuasion==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->persuasion==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Religion</label>
                    <select name="religion" class="form-control" placeholder="Religion">
                        @if ($character->religion==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->religion==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Sleight of Hand</label>
                    <select name="soh" class="form-control" placeholder="Sleight of Hand">
                        @if ($character->soh==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->soh==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Stealth</label>
                    <select name="stealth" class="form-control" placeholder="Stealth">
                        @if ($character->stealth==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->stealth==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1"for="">Survival</label>
                    <select name="survival" class="form-control" placeholder="Survival">
                        @if ($character->survival==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->survival==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Insight</label>
                    <select name="insight" class="form-control" placeholder="Insight">
                        @if ($character->insight==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                            <option value="2">Expertise</option>
                        @elseif($character->insight==1)
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                            <option value="2">Expertise</option>
                        @else
                            <option value="0">None</option>
                            <option value="1">Proficency</option>
                            <option value="2" selected>Expertise</option>
                        @endif
                    </select>
                </div>      
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mt-4">Color</h3>
            </div>
            <div class="row justify-content-center">
                <p class="col-8">Select a color for the background color of your character sheet in Encounters!</p>
            </div>
            <div class="row flex-wrap justify-content-center">
                <select name="color" class="col-8 form-control" placeholder="COLOR">
                    @if ($character->color==0)
                        <option value="0" selected>Red</option>
                        <option value="1">Yellow</option>
                        <option value="2">Orange</option>
                        <option value="3">Green</option>
                        <option value="4">Blue</option>
                        <option value="5">Pink</option>
                        <option value="6">Violet</option>
                        <option value="7">White</option>
                        <option value="8">Black</option>
                    @elseif($character->color==1)
                        <option value="0">Red</option>
                        <option value="1"selected>Yellow</option>
                        <option value="2">Orange</option>
                        <option value="3">Green</option>
                        <option value="4">Blue</option>
                        <option value="5">Pink</option>
                        <option value="6">Violet</option>
                        <option value="7">White</option>
                        <option value="8">Black</option>
                    @elseif($character->color==2)
                        <option value="0">Red</option>
                        <option value="1">Yellow</option>
                        <option value="2"selected>Orange</option>
                        <option value="3">Green</option>
                        <option value="4">Blue</option>
                        <option value="5">Pink</option>
                        <option value="6">Violet</option>
                        <option value="7">White</option>
                        <option value="8">Black</option>
                    @elseif($character->color==3)
                        <option value="0">Red</option>
                        <option value="1">Yellow</option>
                        <option value="2">Orange</option>
                        <option value="3"selected>Green</option>
                        <option value="4">Blue</option>
                        <option value="5">Pink</option>
                        <option value="6">Violet</option>
                        <option value="7">White</option>
                        <option value="8">Black</option>
                    @elseif($character->color==4)
                        <option value="0">Red</option>
                        <option value="1">Yellow</option>
                        <option value="2">Orange</option>
                        <option value="3">Green</option>
                        <option value="4"selected>Blue</option>
                        <option value="5">Pink</option>
                        <option value="6">Violet</option>
                        <option value="7">White</option>
                        <option value="8">Black</option>
                    @elseif($character->color==5)
                        <option value="0">Red</option>
                        <option value="1">Yellow</option>
                        <option value="2">Orange</option>
                        <option value="3">Green</option>
                        <option value="4">Blue</option>
                        <option value="5"selected>Pink</option>
                        <option value="6">Violet</option>
                        <option value="7">White</option>
                        <option value="8">Black</option>
                    @elseif($character->color==6)
                        <option value="0">Red</option>
                        <option value="1">Yellow</option>
                        <option value="2">Orange</option>
                        <option value="3">Green</option>
                        <option value="4">Blue</option>
                        <option value="5">Pink</option>
                        <option value="6"selected>Violet</option>
                        <option value="7">White</option>
                        <option value="8">Black</option>
                    @elseif($character->color==7)
                        <option value="0">Red</option>
                        <option value="1">Yellow</option>
                        <option value="2">Orange</option>
                        <option value="3">Green</option>
                        <option value="4">Blue</option>
                        <option value="5">Pink</option>
                        <option value="6">Violet</option>
                        <option value="7"selected>White</option>
                        <option value="8">Black</option>
                    @else
                        <option value="0">Red</option>
                        <option value="1">Yellow</option>
                        <option value="2">Orange</option>
                        <option value="3">Green</option>
                        <option value="4">Blue</option>
                        <option value="5">Pink</option>
                        <option value="6">Violet</option>
                        <option value="7">White</option>
                        <option value="8"selected>Black</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mt-4">Backstory</h3>
            </div>
            <div class="row justify-content-center">
                <p>Insert a bit of backstory</p>
            </div>
            <div class="row flex-wrap justify-content-center">
                <textarea name="back" class="col-8 form-control">{{$character->back}}</textarea>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <button type="submit" class="btn btn-dark btn-lg buttonselect mt-4" style="color:#2e2e2d!important;">Modify Character</button>
            </div>
        </div>
    </form>
    <div class="container">
        <div class="row justify-content-center text-center" style="margin-bottom:2em;">
            <a  class="btn btn-dark btn-lg buttonselect" href="{{ action('CharacterController@indexCharacters') }}" style="color:#2e2e2d!important;" role="button">
                BACK
            </a>
        </div>
    </div>
</div>
@endsection