<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Models\Player;

class PlayerController extends Controller
{
    /**
     *  Stampo tutti i player
     * type:get
     */
    public function index()
    {
        return Player::all();
    }

    /**
     *  Mostro il player relativo al parametro passato
     * type:get
     */
    public function show(Player $player)
    {
        return $player;
    }

    /**
     *  Aggiungo alla lista dei players un nuovo player
     *  con il nome che gli viene passato e con il primo id disponibile
     * type:post
     */
    public function store(StorePlayerRequest $request)
    {
        $player = new Player();
        $player->name = $request->name;
        $player->team_id = $request->team_id;
        $player->surname = $request->surname;
        $player->credit = $request->credit;
        $player->role = $request->role;

        $player->save();
        return $player;
    }

    


    /**
     * Modifico la player richiesta con il nuovo nome passato 
     * type:put
     */
    public function update(UpdatePlayerRequest $request, Player $player)
    {
        $player->name = $request->name;
        $player->save();
        return $player->name;
    }

    /**
     *  Rimuovo dalla lista la player con id uguale al parametro passato
     * type:delete
     */
    public function destroy(player $player)
    {
        $player->delete();
        return $player;
    }
}

