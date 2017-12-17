<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Frage;

class FrageController extends Controller
{
    public function index()
    {
        return Frage::all();
    }

    public function show($id)
    {
        return Frage::find($id);
    }

    public function store(Request $request)
    {
        return Frage::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $frage = Frage::findOrFail($id);
        $frage->update($request->all());

        return $frage;
    }

    public function delete(Request $request, $id)
    {
        $frage = Frage::findOrFail($id);
        $frage->delete();

        return 204;
    }
}
