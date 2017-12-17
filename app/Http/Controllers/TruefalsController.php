<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truefalse;

class TruefalsController extends Controller
{
    public function index()
    {
        return Truefalse::all();
    }

    public function show($id)
    {
        return Truefalse::find($id);
    }

    public function store(Request $request)
    {
        return Truefalse::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $truefalse = Truefalse::findOrFail($id);
        $truefalse->update($request->all());

        return $truefalse;
    }

    public function delete(Request $request, $id)
    {
        $truefalse = Truefalse::findOrFail($id);
        $truefalse->delete();

        return 204;
    }
}
