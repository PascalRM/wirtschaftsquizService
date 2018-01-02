<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserInfoController extends Controller
{
    public function show($id)
    {
        $data = User::where('id',$id)->lists(
            'id',
            'name',
            'email'
        )->toArray();

        return $data;
    }

}
