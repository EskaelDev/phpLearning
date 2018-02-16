<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Taylor', 'Matt', 'Jeffrey'];
        return View::make('welcome', compact('people'));
    }
}
