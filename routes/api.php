<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
/* 
Route::apiResource('/organizations', OrganizationController::class); */


Route::get('/organizations', [OrganizationController::class, 'index']);
Route::post('/organizations', [OrganizationController::class, 'store']);
Route::get('/organizations/{organization}', [OrganizationController::class, 'show']);
Route::put('/organizations/{organization}', [OrganizationController::class, 'update']);
Route::patch('/organizations/{organization}', [OrganizationController::class, 'update']);
Route::delete('/organizations/{organization}', [OrganizationController::class, 'destroy']);




