<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eingabe;

class EingabeController extends Controller
{
    public function index()
    {
        return Eingabe::all();
    }

    public function show($id)
    {
        return Eingabe::find($id);
    }

    public function store(Request $request)
    {
        return Eingabe::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $eingabe = Eingabe::findOrFail($id);
        $eingabe->update($request->all());

        return $eingabe;
    }

    public function delete(Request $request, $id)
    {
        $eingabe = Eingabe::findOrFail($id);
        $eingabe->delete();

        return 204;
    }
}
