<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     *  Stampo tutte le Team
     */
    public function index()
    {
        return Team::all();
    }

    /**
     *  Mostro il'Team relativa al parametro passato
     */
    public function show(Team $team)
    {
        return $team;
    }

    /**
     *  Aggiungo alla lista delle oragnizations una nuova Team
     *  con il nome che gli viene passato e con il primo id disponibile
     */
    public function store(StoreTeamRequest $request)
    {

        $team = new Team();
        $team->name = $request->name;
        $team->organization_id = $request->organization_id;
        $team->president = $request->president;
        $team->color = $request->color;
        $team->save();

        return $team;
    }


    /**
     * Modifico l'Team richiesta con il nuovo nome passato 
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $team->name = $request->name;
        $team->save();
        return $team;
    }

    /**
     *  Rimuovo dalla lista l'Team quella con id uguale al parametro passato
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return $team;
    }
}
