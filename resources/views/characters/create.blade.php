@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
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

                    <h3>Header Stats</h3>
                    Name<input type="text" name="name" id="name"><br>
                    AC<input type="number" name="ac" id="ac"><br>
                    Class<select name="class">
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
                    </select><br>
                    Level<input type="number" name="level" id="level"><br>
                    Hit Points<input type="number" name="hitpoints" id="hitpoints"><br>
                    <h3>Stats</h3><br>
                    STRENGTH<input type="number" name="str" id="str"><br>
                    DEXTERITY<input type="number" name="dex" id="dex"><br>
                    CONSTITUTION<input type="number" name="con" id="con"><br>
                    INTELLIGENCE<input type="number" name="inte" id="inte"><br>
                    WISDOM<input type="number" name="wis" id="wis"><br>
                    CHARISMA<input type="number" name="cha" id="cha"><br>
                    <h3>Saving Throws</h3><br>
                    STR<select name="st_str">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    DEX<select name="st_dex">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    CON<select name="st_con">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    INT<select name="st_inte">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    WIS<select name="st_wis">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    CHA<select name="st_cha">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    <h3>Skills</h3><br>
                    Acrobatics<select name="acrobatics">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Animal Handling<select name="animalhan">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Arcana<select name="arcana">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Athletics<select name="athletics">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Deception<select name="deception">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    History<select name="history">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Insight<select name="insight">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Intimidation<select name="intimidation">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Investigation<select name="investigation">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Medicine<select name="medicine">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Nature<select name="nature">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Perception<select name="perception">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Performance<select name="performance">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Persuasion<select name="persuasion">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Religion<select name="religion">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Sleight of Hand<select name="soh">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Stealth<select name="stealth">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Survival<select name="survival">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    Insight<select name="insight">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                        <option value="2">Expertise</option>
                    </select><br>
                    <h3>Color</h3><br>
                    Select a color for the background color of your character sheet in Encounters!<br>
                    Color<select name="color">
                        <option value="0">Red</option>
                        <option value="1">Yellow</option>
                        <option value="2">Orange</option>
                        <option value="3">Green</option>
                        <option value="4">Blue</option>
                        <option value="5">Pink</option>
                        <option value="6">Violet</option>
                        <option value="7">White</option>
                        <option value="8">Black</option>
                    </select><br>

                    <h3>Backstory</h3><br>
                    Insert a bit of backstory:<br>
                    <textarea name="back">
                    
                    </textarea><br>

                    <button type="submit" class="btn btn-primary">
                        Create Character
                    </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection