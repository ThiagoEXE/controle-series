<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSeries(Request $request){

        $series = [
           'Punisher',
           'Lost',
           'Prison Break',
           'Breaking Bad'
        ];
         //compact retora um array com a variavel de nome series para passar para o frontend
         //no front end a variavel é utilizada para percorrer o array e listar as series
        return view('series.index')->with('series', $series);
   }
}
