<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;


Route::apiResource('/organizations', OrganizationController::class);
Route::apiResource('/leagues', LeagueController::class);
Route::apiResource('/teams', TeamController::class);
Route::apiResource('/players', PlayerController::class);

