<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeagueRequest;
use App\Http\Requests\UpdateLeagueRequest;
use App\Models\League;


/* 
request--> dati che riceve
League --> parametro che gli passo
*/

class LeagueController extends Controller
{
    /**
     *  Stampo tutte le League (GET)
     */
    public function index()
    {
        return League::all();
    }

    /**
     *  Mostro la League relativa al parametro passato (GET)
     */
    public function show(League $league)
    {
        return $league;
    }

    /**
     *  Aggiungo alla lista delle Leagues una nuova League
     *  con il nome che gli viene passato e con il primo id disponibile (POST)
     */
    public function store(StoreLeagueRequest $request)
    {

        $league = new League();
        $league->organizationName = "FantaSkn";
        $league->name = $request->name;
        $league->save();

        return $league;
    }

    /**
     * Modifico la League richiesta con il nuovo nome passato (PUT)
     */
    public function update(UpdateLeagueRequest $request, League $league)
    {
        $league->name = $request->name;
        $league->save();
        return $league->name;
    }

    /**
     *  Rimuovo dalla lista l'League quella con id uguale al parametro passato (DELETE)
     */
    public function destroy(League $league)
    {
        $league->delete();
        return $league;
    }
}
