<?php

namespace App\Http\Controllers;
use App\Team;
use App\User;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function listTeam()
    {

        $result = [];

        $teams = Team::all();
        $users= User::all();
        foreach ($teams as $team) {
            $user = User::where('team_id', $team->id)->get();
//$usuario=$user->name;
$users= [];
foreach($user as $obj){


    $result2[]=$obj->name;

}




            $result[] = (object)['name' => $team->name,
            'users' => $result2];
        }




        return view('test')
            ->with('teams', $result);


    }
}
