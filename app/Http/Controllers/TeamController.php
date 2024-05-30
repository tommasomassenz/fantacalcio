<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;


/* 
request--> dati che riceve
Team --> parametro che gli passo
*/

class TeamController extends Controller
{
    /**
     *  Stampo tutte le Team (GET)
     */
    public function index()
    {
        return Team::all();
    }

    /**
     *  Mostro la Team relativa al parametro passato (GET)
     */
    public function show(Team $team)
    {
        return $team;
    }

    /**
     *  Aggiungo alla lista delle Teams una nuova Team
     *  con il nome che gli viene passato e con il primo id disponibile (POST)
     */
    public function store(StoreTeamRequest $request)
    {

        $team = new Team();
        $team->organizationName = "FantaSkn";
        $team->name = $request->name;
        $team->coach = $request->coach;
        $team->save();

        return $team;
    }

    /**
     * Modifico la Team richiesta con il nuovo nome passato (PUT)
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $team->name = $request->name;
        $team->coach = $request->coach;
        $team->save();
        return $team->name;
    }

    /**
     *  Rimuovo dalla lista l'Team quella con id uguale al parametro passato (DELETE)
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return $team;
    }
}
