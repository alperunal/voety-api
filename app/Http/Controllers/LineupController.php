<?php

namespace App\Http\Controllers;

use App\Lineup;
use Illuminate\Http\Request;

class LineupController extends Controller
{

    public function showAllLineups()
    {
        return response()->json(Lineup::all());
    }

    public function showOneLineup($id)
    {
        return response()->json(Lineup::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
            'main_color' => 'required',
            'secondary_color' => 'required',
            'number_color' => 'required',
            'players' => 'required',
            'user_id' => 'required',
            'version' => 'required'
        ]);

        $lineup = Lineup::create($request->all());

        return response()->json($lineup, 201);
    }

    public function update($id, Request $request)
    {
        $lineup = Lineup::findOrFail($id);
        $lineup->update($request->all());

        return response()->json($lineup, 200);
    }

    public function delete($id)
    {
        Lineup::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}