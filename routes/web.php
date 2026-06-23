<?php

use Illuminate\Support\Facades\Route;
use App\Models\Team;
use App\Models\Player;

Route::get('/', fn() => view('welcome'));

Route::get('/teams', function () {
    return view('teams.index', ['teams' => Team::all()]);
});

Route::get('/players', function () {
    return view('players.index', ['players' => Player::all()]);
});
