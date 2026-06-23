<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use App\Models\Game;
use App\Models\President;
use App\Models\Goal;
use Illuminate\Http\Request;

class WebController extends Controller
{
    // ============= EQUIPOS =============
    public function teamsIndex()
    {
        $teams = Team::all();
        $presidents = President::all();
        return view('teams.index', compact('teams', 'presidents'));
    }

    public function teamsCreate()
    {
        $presidents = President::all();
        return view('teams.create', compact('presidents'));
    }

    public function teamsStore(Request $request)
    {
        Team::create($request->all());
        return redirect('/teams');
    }

    public function teamsEdit($id)
    {
        $team = Team::find($id);
        $presidents = President::all();
        return view('teams.edit', compact('team', 'presidents'));
    }

    public function teamsUpdate(Request $request, $id)
    {
        $team = Team::find($id);
        $team->update($request->all());
        return redirect('/teams');
    }

    public function teamsDelete($id)
    {
        Team::find($id)->delete();
        return redirect('/teams');
    }

    // ============= JUGADORES =============
    public function playersIndex()
    {
        $players = Player::all();
        $teams = Team::all();
        return view('players.index', compact('players', 'teams'));
    }

    public function playersCreate()
    {
        $teams = Team::all();
        return view('players.create', compact('teams'));
    }

    public function playersStore(Request $request)
    {
        Player::create($request->all());
        return redirect('/players');
    }

    public function playersEdit($id)
    {
        $player = Player::find($id);
        $teams = Team::all();
        return view('players.edit', compact('player', 'teams'));
    }

    public function playersUpdate(Request $request, $id)
    {
        $player = Player::find($id);
        $player->update($request->all());
        return redirect('/players');
    }

    public function playersDelete($id)
    {
        Player::find($id)->delete();
        return redirect('/players');
    }

    // ============= JUEGOS =============
    public function gamesIndex()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function gamesCreate()
    {
        return view('games.create');
    }

    public function gamesStore(Request $request)
    {
        Game::create($request->all());
        return redirect('/games');
    }

    public function gamesEdit($id)
    {
        $game = Game::find($id);
        return view('games.edit', compact('game'));
    }

    public function gamesUpdate(Request $request, $id)
    {
        $game = Game::find($id);
        $game->update($request->all());
        return redirect('/games');
    }

    public function gamesDelete($id)
    {
        Game::find($id)->delete();
        return redirect('/games');
    }

    // ============= PRESIDENTES =============
    public function presidentsIndex()
    {
        $presidents = President::all();
        return view('presidents.index', compact('presidents'));
    }

    public function presidentsCreate()
    {
        return view('presidents.create');
    }

    public function presidentsStore(Request $request)
    {
        President::create($request->all());
        return redirect('/presidents');
    }

    public function presidentsEdit($id)
    {
        $president = President::find($id);
        return view('presidents.edit', compact('president'));
    }

    public function presidentsUpdate(Request $request, $id)
    {
        $president = President::find($id);
        $president->update($request->all());
        return redirect('/presidents');
    }

    public function presidentsDelete($id)
    {
        President::find($id)->delete();
        return redirect('/presidents');
    }

    // ============= GOLES =============
    public function goalsIndex()
    {
        $goals = Goal::all();
        $players = Player::all();
        $games = Game::all();
        return view('goals.index', compact('goals', 'players', 'games'));
    }

    public function goalsCreate()
    {
        $players = Player::all();
        $games = Game::all();
        return view('goals.create', compact('players', 'games'));
    }

    public function goalsStore(Request $request)
    {
        Goal::create($request->all());
        return redirect('/goals');
    }

    public function goalsEdit($id)
    {
        $goal = Goal::find($id);
        $players = Player::all();
        $games = Game::all();
        return view('goals.edit', compact('goal', 'players', 'games'));
    }

    public function goalsUpdate(Request $request, $id)
    {
        $goal = Goal::find($id);
        $goal->update($request->all());
        return redirect('/goals');
    }

    public function goalsDelete($id)
    {
        Goal::find($id)->delete();
        return redirect('/goals');
    }
}
