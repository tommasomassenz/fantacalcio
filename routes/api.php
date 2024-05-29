<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;

Route::apiResource('/organizations', OrganizationController::class); 
Route::apiResource('/league', LeagueController::class);
Route::apiResource('/team', TeamController::class);
Route::apiResource('/player', PlayerController::class);
 


