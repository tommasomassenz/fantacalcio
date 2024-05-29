<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreLeagueRequest;
use App\Http\Requests\UpdateLeagueRequest;
use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     *  Stampo tutte le League
     * type:get
     */
    public function index()
    {
        return League::all();
    }

    /**
     *  Mostro la league relativa al parametro passato
     * type:get
     */
    public function show(League $league)
    {
        return $league;
    }

    /**
     *  Aggiungo alla lista delle leagues una nuova league
     *  con il nome che gli viene passato e con il primo id disponibile
     * type:post
     */
    public function store(StoreLeagueRequest $request)
    {
        $league = new League();
        $league->name = $request->name;
        $league->organization_id = 1;
        $league->save();
        return $league;
    }

    /**
     * Modifico la league richiesta con il nuovo nome passato 
     * type:put
     */
    public function update(UpdateLeagueRequest $request, League $league)
    {
        $league->name = $request->name;
        $league->save();
        return $league->name;
    }

    /**
     *  Rimuovo dalla lista la league con id uguale al parametro passato
     * type:delete
     */
    public function destroy(League $league)
    {
        $league->delete();
        return $league;
    }
}
