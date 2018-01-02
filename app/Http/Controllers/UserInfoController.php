<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserInfoController extends Controller
{
    public function show($id)
    {
        $data = User::find($id)->lists(
            'id',
            'name',
            'email'
        );

        return $data;
    }

}
