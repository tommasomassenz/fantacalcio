<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\LeagueController;

Route::apiResource('/organizations', OrganizationController::class);
Route::apiResource('/leagues', LeagueController::class);

