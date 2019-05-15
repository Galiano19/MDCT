<?php

?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    
        
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
                    Name<input type="text" name="name" value ="{{$character->name}}" id="name"><br>
                    AC<input type="number" name="ac" value ="{{$character->ac}}" id="ac"><br>
                    Class: {{$character->class}}<br>
                    Level<input type="number" name="level" value ="{{$character->level}}" id="level"><br>
                    Hit Points<input type="number" name="hitpoints" value ="{{$character->hitpoints}}" id="hitpoints"><br>
                    <h3>Stats</h3><br>
                    STRENGTH<input type="number" name="str" value ="{{$character->str}}" id="str"><br>
                    DEXTERITY<input type="number" name="dex" value ="{{$character->dex}}"  id="dex"><br>
                    CONSTITUTION<input type="number" name="con" value ="{{$character->con}}" id="con"><br>
                    INTELLIGENCE<input type="number" name="inte" value ="{{$character->inte}}" id="inte"><br>
                    WISDOM<input type="number" name="wis" value ="{{$character->wis}}" id="wis"><br>
                    CHARISMA<input type="number" name="cha" value ="{{$character->cha}}" id="cha"><br>
                    <h3>Saving Throws</h3><br>
                    STR<select name="st_str">
                        @if ($character->st_str==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select><br>
                    DEX<select name="st_dex">
                    @if ($character->st_dex==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select><br>
                    CON<select name="st_con">
                    @if ($character->st_con==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select><br>
                    INT<select name="st_inte">
                    @if ($character->st_inte==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select><br>
                    WIS<select name="st_wis">
                    @if ($character->st_wis==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select><br>
                    CHA<select name="st_cha">
                    @if ($character->st_cha==0)
                            <option value="0" selected>None</option>
                            <option value="1">Proficency</option>
                        @else
                            <option value="0">None</option>
                            <option value="1" selected>Proficency</option>
                        @endif
                    </select><br>
                    <h3>Skills</h3><br>
                    Acrobatics<select name="acrobatics">
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
                    </select><br>
                    Animal Handling<select name="animalhan">
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
                    </select><br>
                    Arcana<select name="arcana">
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
                    </select><br>
                    Athletics<select name="athletics">
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
                    </select><br>
                    Deception<select name="deception">
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
                    </select><br>
                    History<select name="history">
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
                    </select><br>
                    Insight<select name="insight">
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
                    </select><br>
                    Intimidation<select name="intimidation">
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
                    </select><br>
                    Investigation<select name="investigation">
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
                    </select><br>
                    Medicine<select name="medicine">
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
                    </select><br>
                    Nature<select name="nature">
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
                    </select><br>
                    Perception<select name="perception">
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
                    </select><br>
                    Performance<select name="performance">
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
                    </select><br>
                    Persuasion<select name="persuasion">
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
                    </select><br>
                    Religion<select name="religion">
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
                    </select><br>
                    Sleight of Hand<select name="soh">
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
                    </select><br>
                    Stealth<select name="stealth">
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
                    </select><br>
                    Survival<select name="survival">
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
                    </select><br>
                    Insight<select name="insight">
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
                    </select><br>
                    <h3>Color</h3><br>
                    Select a color for the background color of your character sheet in Encounters!<br>
                    Color<select name="color">
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
                    </select><br>

                    <h3>Backstory</h3><br>
                    Insert a bit of backstory:<br>
                    <textarea name="back">
                    {{$character->back}}
                    </textarea><br>

                    <button type="submit" class="btn btn-primary">
                        Create Character
                    </button>

                    </form>
                    
</div>
@endsection