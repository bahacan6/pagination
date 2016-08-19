<?php

namespace App\Http\Controllers;

use App\Users;

class Home extends Controller
{
    public function usersList()
    {
		//Dökümanda simplePaginate Vardı normal paginate ile de denedim
		$usersList = Users::orderBy('userId', 'desc')->simplePaginate(5);

        return view('usersList')->with('usersList' , $usersList);
    }
}
