<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserInfoController extends Controller
{
    public function show($id)
    {
        $data = User::where('id',$id)->select(
            'id',
            'name',
            'email'
        )->get();

        return $data;
    }

}
