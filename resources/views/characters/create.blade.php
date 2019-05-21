@extends('layouts.lobby')

@section('content')
<div class="createCharacter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="panel-heading text-justify">CREATE CHARACTER</div>
            <p class="fancy nickname"><span>{{Auth::user()->nick}}</span></p>
        </div>
    </div>

    <form method="POST" action="{{ action('CharacterController@store') }}">
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

        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mt-4">Header Stats</h3>
            </div>
            <div class="row justify-content-between">
                <div class="col-12">
                    <label class="mt-1" for="name">Character name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Character name">
                </div>
                <div class="col-sm-2">
                    <label class="mt-1" for="">Armor Class</label>
                    <input type="text" class="form-control" name="ac" id="ac" placeholder="Armor Class">   
                </div>
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Hit Points</label>
                    <input type="number" class="form-control" name="hitpoints" id="hitpoints" placeholder="Hit Points">
                </div>   
                <div class="col-sm-2">
                    <label class="mt-1" for="">Level</label>
                    <input type="number" class=" form-control" name="level" id="level" placeholder="Level">
                </div> 
                <div class="col-sm-4">
                    <label class="mt-1" for="">Class</label>
                    <select class=" form-control" name="class" placeholder="Class">
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
                    <input type="number" name="str" id="str" class="form-control" placeholder="STRENGTH">
                </div> 
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">DEXTERITY</label>
                    <input type="number" name="dex" id="dex" class="form-control" placeholder="DEXTERITY">
                </div> 
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">CONSTITUTION</label>
                    <input type="number" name="con" id="con" class="form-control" placeholder="CONSTITUTION">
                </div> 
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">INTELLIGENCE</label>
                    <input type="number" name="inte" id="inte" class="form-control" placeholder="INTELLIGENCE">
                </div> 
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">WISDOM</label>
                    <input type="number" name="wis" id="wis" class="form-control" placeholder="WISDOM">
                </div> 
                <div class=" col-sm-2 ">
                    <label class="mt-1" for="">CHARISMA</label>
                    <input type="number" name="cha" id="cha" class="form-control" placeholder="CHARISMA">
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
                    <select name="st_str" class="form-control" placeholder="STRENGTH">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">DEXTERITY</label>
                    <select name="st_dex" class="form-control" placeholder="DEXTERITY">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">CONSTITUTION</label>
                    <select name="st_con" class="form-control" placeholder="CONSTITUTION">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">INTELLIGENCE</label>
                    <select name="st_inte" class="form-control" placeholder="INTELLIGENCE">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">WISDOM</label>
                    <select name="st_wis" class="form-control" placeholder="WISDOM">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">CHARISMA</label>
                    <select name="st_cha" class="form-control" placeholder="CHARISMA">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
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
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Animal Handling</label>
                    <select name="animalhan" class="form-control" placeholder="Animal Handling">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Arcana</label>
                    <select name="arcana" class="form-control" placeholder="Arcana">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Athletics</label>
                    <select name="athletics" class="form-control" placeholder="Athletics">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Deception</label>
                    <select name="deception" class="form-control" placeholder="Deception">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">History</label>
                    <select name="history" class="form-control" placeholder="History">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Insight</label>
                    <select name="insight" class="form-control" placeholder="Insight">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Intimidation</label>
                    <select name="intimidation" class="form-control" placeholder="Intimidation">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Investigation</label>
                    <select name="investigation" class="form-control" placeholder="Investigation">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Medicine</label>
                    <select name="medicine" class="form-control" placeholder="Medicine">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Nature</label>
                    <select name="nature" class="form-control" placeholder="Nature">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Perception</label>
                    <select name="perception" class="form-control" placeholder="Perception">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Performance</label>
                    <select name="performance" class="form-control" placeholder="Performance">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Persuasion</label>
                    <select name="persuasion" class="form-control" placeholder="Persuasion">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Religion</label>
                    <select name="religion" class="form-control" placeholder="Religion">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Sleight of Hand</label>
                    <select name="soh" class="form-control" placeholder="Sleight of Hand">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Stealth</label>
                    <select name="stealth" class="form-control" placeholder="Stealth">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1"for="">Survival</label>
                    <select name="survival" class="form-control" placeholder="Survival">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select>
                </div> 
                <div class="col-sm-2 ">
                    <label class="mt-1" for="">Insight</label>
                    <select name="insight" class="form-control" placeholder="Insight">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
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
                    <option value="0">Red</option>
                    <option value="1">Yellow</option>
                    <option value="2">Orange</option>
                    <option value="3">Green</option>
                    <option value="4">Blue</option>
                    <option value="5">Pink</option>
                    <option value="6">Violet</option>
                    <option value="7">White</option>
                    <option value="8">Black</option>
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
                <textarea name="back" class="col-8 form-control" placeholder="Backstory"></textarea>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-dark btn-lg buttonselect mt-4 mb-4">Create Character</button>
            </div>
        </div>
    </form>
    <div class="container">
        <div class="row justify-content-center mb-4" style="margin-bottom:2em;">
            <a  class="btn btn-dark btn-lg buttonselect" href="{{ action('CharacterController@indexCharacters') }}" role="button">
                BACK
            </a>
        </div>
    </div>
</div>
@endsection