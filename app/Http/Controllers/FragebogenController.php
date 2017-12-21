<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fragebogen;

class hero extends Controller
{
    public function index()
    {
        return Fragebogen::all();
    }

    public function show($id)
    {
        return Fragebogen::find($id);
    }

    public function store(Request $request)
    {
        return Fragebogen::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $fragebogen = Fragebogen::findOrFail($id);
        $fragebogen->update($request->all());

        return $fragebogen;
    }

    public function delete(Request $request, $id)
    {
        $fragebogen = Fragebogen::findOrFail($id);
        $fragebogen->delete();

        return 204;
    }
}
