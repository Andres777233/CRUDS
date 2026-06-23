<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('teams', [ApiController::class, 'teamsIndex'])->name('api.v1.teams.index');
Route::post('teams', [ApiController::class, 'teamsStore'])->name('api.v1.teams.store');
Route::get('teams/{team}', [ApiController::class, 'teamsShow'])->name('api.v1.teams.show');
Route::put('teams/{team}', [ApiController::class, 'teamsUpdate'])->name('api.v1.teams.update');
Route::delete('teams/{team}', [ApiController::class, 'teamsDestroy'])->name('api.v1.teams.delete');

Route::get('players', [ApiController::class, 'playersIndex'])->name('api.v1.players.index');
Route::get('players/{player}', [ApiController::class, 'playersShow'])->name('api.v1.players.show');

Route::get('games', [ApiController::class, 'gamesIndex'])->name('api.v1.games.index');
Route::get('games/{game}', [ApiController::class, 'gamesShow'])->name('api.v1.games.show');

Route::get('presidents', [ApiController::class, 'presidentsIndex'])->name('api.v1.presidents.index');
Route::get('presidents/{president}', [ApiController::class, 'presidentsShow'])->name('api.v1.presidents.show');

Route::get('goals', [ApiController::class, 'goalsIndex'])->name('api.v1.goals.index');
Route::get('goals/{goal}', [ApiController::class, 'goalsShow'])->name('api.v1.goals.show');
