<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
	public function index()
	{
		$first_name = "yoshiro";
        $last_name = "tadokoro";
		return view('article',compact('first_name', 'last_name'));
	}

}
