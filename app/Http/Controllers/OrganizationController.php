<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;
use App\Models\Organization;


/* 
request--> dati che riceve
organization --> parametro che gli passo
*/

class OrganizationController extends Controller
{
    /**
     *  Stampo tutte le Organization (GET)
     */
    public function index()
    {
        return Organization::all();
    }

    /**
     *  Mostro l'organization relativa al parametro passato (GET)
     */
    public function show(Organization $organization)
    {
        return $organization;
    }

    /**
     *  Aggiungo alla lista delle organizations una nuova organization
     *  con il nome che gli viene passato e con il primo id disponibile (POST)
     */
    public function store(StoreOrganizationRequest $request)
    {

        $organization = new Organization();
        $organization->name = $request->name;
        $organization->save();

        return $organization;
    }

    /**
     * Modifico l'organization richiesta con il nuovo nome passato (PUT)
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        $organization->name = $request->name;
        $organization->save();
        return $organization->name;
    }

    /**
     *  Rimuovo dalla lista l'organization quella con id uguale al parametro passato (DELETE)
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();
        return $organization;
    }
}
