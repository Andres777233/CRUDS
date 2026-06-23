<?php

namespace App\Http\Controllers;

use App\Models\President;
use App\Models\Team;
use App\Models\Player;
use App\Models\Game;
use App\Models\Goal;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function teamsIndex()
    {
        return response()->json(Team::equiposConPresidentes());
    }

    public function teamsShow(Team $team)
    {
        return response()->json($team->load('president', 'players.goals', 'games'));
    }

    public function teamsStore(Request $request)
    {
        $team = Team::create($request->all());
        return response()->json($team, 201);
    }

    public function teamsUpdate(Request $request, Team $team)
    {
        $team->update($request->all());
        return response()->json($team);
    }

    public function teamsDestroy(Team $team)
    {
        $team->delete();
        return response()->json(['mensaje' => 'Equipo eliminado']);
    }

    public function playersIndex()
    {
        return response()->json(Player::jugadoresConGoles());
    }

    public function playersShow(Player $player)
    {
        return response()->json($player->load('team', 'goals.game'));
    }

    public function playersStore(Request $request)
    {
        $player = Player::create($request->all());
        return response()->json($player, 201);
    }

    public function playersUpdate(Request $request, Player $player)
    {
        $player->update($request->all());
        return response()->json($player);
    }

    public function playersDestroy(Player $player)
    {
        $player->delete();
        return response()->json(['mensaje' => 'Jugador eliminado']);
    }

    public function gamesIndex()
    {
        return response()->json(Game::juegosConGoles());
    }

    public function gamesShow(Game $game)
    {
        return response()->json($game->load('goals.player.team', 'teams'));
    }

    public function gamesStore(Request $request)
    {
        $game = Game::create($request->all());
        return response()->json($game, 201);
    }

    public function gamesUpdate(Request $request, Game $game)
    {
        $game->update($request->all());
        return response()->json($game);
    }

    public function gamesDestroy(Game $game)
    {
        $game->delete();
        return response()->json(['mensaje' => 'Juego eliminado']);
    }

    public function presidentsIndex()
    {
        return response()->json(President::presidentesCompleto());
    }

    public function presidentsShow(President $president)
    {
        return response()->json($president->load('team.players.goals.game'));
    }

    public function presidentsStore(Request $request)
    {
        $president = President::create($request->all());
        return response()->json($president, 201);
    }

    public function presidentsUpdate(Request $request, President $president)
    {
        $president->update($request->all());
        return response()->json($president);
    }

    public function presidentsDestroy(President $president)
    {
        $president->delete();
        return response()->json(['mensaje' => 'Presidente eliminado']);
    }

    public function goalsIndex()
    {
        $goals = Goal::with('player.team', 'game')->get();
        return response()->json($goals);
    }

    public function goalsShow(Goal $goal)
    {
        return response()->json($goal->load('player.team', 'game'));
    }

    public function goalsStore(Request $request)
    {
        $goal = Goal::create($request->all());
        return response()->json($goal, 201);
    }

    public function goalsUpdate(Request $request, Goal $goal)
    {
        $goal->update($request->all());
        return response()->json($goal);
    }

    public function goalsDestroy(Goal $goal)
    {
        $goal->delete();
        return response()->json(['mensaje' => 'Gol eliminado']);
    }
}
