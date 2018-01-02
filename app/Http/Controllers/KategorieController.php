<?php

namespace App\Http\Controllers;

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
        return DB::table('fragebogens')->where('id_kategorie',$id);
    }
}
