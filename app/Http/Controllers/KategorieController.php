<?php

namespace App\Http\Controllers;

use App\Frage;
use Illuminate\Http\Request;
use App\Kategorie;
use APP\Fragebogen;

class KategorieController extends Controller
{
    public function index()
    {
        return Kategorie::all();
    }

    public function show($id)
    {
        return Kategorie::find($id);
    }

    public function store(Request $request)
    {
        return Kategorie::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $kategorie = Kategorie::findOrFail($id);
        $kategorie->update($request->all());

        return $kategorie;
    }

    public function delete(Request $request, $id)
    {
        $kategorie = Kategorie::findOrFail($id);
        $kategorie->delete();

        return 204;
    }

    public function getfragebogen(Request $request, $id){
        $data = DB::table('fragebogens')->where('id_kategorie',$id)->get();
        return Fragebogen::where('id_kategorie',$id);
    }
}
