<?php

namespace App\Http\Controllers;

use App\Frage;
use Illuminate\Http\Request;
use App\Kategorie;
use App\Fragebogen;
use App\User;

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
        //$data = Fragebogen::where('id_kategorie',$id)->get();
        //$data = DB::table('fragebogens')->join('public.users', 'public.users.id', '=', 'public.fragebogens.id_user')>select('public.users.name', 'public.fragebogens.*')->get();
        $data = Fragebogen::find($id);
        $data = $data->fragebogens()->get();
        return $data;
    }
}
