<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home.index');
    }

    public function save(Request $requet)
    {
    	$data = new User();
    	$data->name = $requet->get('name');
    	$data->email = $requet->get('email');
    	$data->save();

    	$getData = User::get();
    	return view('home.show', compact('getData'));
    }
}
