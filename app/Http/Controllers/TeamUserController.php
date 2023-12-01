<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;


class TeamUserController extends Controller
{
    //
    public function edit($id)
    {
        $user = User::find($id);

        // Check if the user with the given ID exists
        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found',
            ], 404);
        }

        // Retrieve teams associated with the user
        $teams = $user->teams;

        return response()->json([
            'status' => 200,
            'teams' => $teams,
        ]);
    }

    public function getTeamCourses($teamId)
    {
        
        $team = Team::find($teamId);

        // Check if the team with the given ID exists
        if (!$team) {
            return response()->json([
                'status' => 404,
                'message' => 'Team not found',
            ], 404);
        }

        // Retrieve courses associated with the team
        $courses = $team->cursos;

        return response()->json([
            'status' => 200,
            'courses' => $courses,
        ]);
    }


    public function getTeamCoursesForCurrentUser()
    {
        // Obtém o usuário autenticado
        $user = auth()->user();

        // Verifica se o usuário está autenticado
        if (!$user) {
            return response()->json([
                'status' => 401,
                'message' => 'Usuário não autenticado',
            ], 401);
        }

        // Obtém os cursos associados ao usuário
        $courses = $user->teams()->with('courses')->get()->pluck('courses')->flatten();

        return response()->json([
            'status' => 200,
            'courses' => $courses,
        ]);
    }
}
