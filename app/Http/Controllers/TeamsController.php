<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use Illuminate\Support\Facades\DB; // Importa la fachada DB para usar consultas SQL personalizadas

class TeamsController extends Controller
{
    public function index()
    {
        $teams = DB::table('teams')
            ->join('divisions', 'teams.division_id', '=', 'divisions.id')
            ->join('conferences', 'divisions.conference_id', '=', 'conferences.id')
            ->join('cities', 'teams.city_id', '=', 'cities.id')
            ->select('teams.*', 'divisions.Division', 'conferences.Conference', 'cities.city')
            ->get();

        return view('teams.index', compact('teams'));
    }
}


