<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Multiplechoice;

class MultiplechoiceController extends Controller
{
    public function index()
    {
        return Multiplechoice::all();
    }

    public function show($id)
    {
        return Multiplechoice::find($id);
    }

    public function store(Request $request)
    {
        return Multiplechoice::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $multiplechoice = Multiplechoice::findOrFail($id);
        $multiplechoice->update($request->all());

        return $multiplechoice;
    }

    public function delete(Request $request, $id)
    {
        $multiplechoice = Multiplechoice::findOrFail($id);
        $multiplechoice->delete();

        return 204;
    }
}
