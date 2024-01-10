<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SeriesController extends Controller
{

    public function listarSeries(Request $request)
    {
        $series = [
            'Breaking Bad',
            'Game of Thrones',
            'Vickings',
            'La Casa de Papel',
            'Friends',
            'The office',
            'The good place',
            'Rick and Morty'
        ];
 
        // return view('listar-series', ['series' => $series]);
        //return view('listar-series', compact('series'));
        return view('series.index')->with('series', $series);
    }
}
