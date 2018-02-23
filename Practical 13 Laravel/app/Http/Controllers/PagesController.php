<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Taylor', 'Matt', 'Jeffrey'];
        $title = 'TITLE';
        $content = 'Lorem ipsum dolor sit amet, no sale homero deleniti sea, quo ei ubique pericula, mel et nibh qualisque. Singulis liberavisse sea ne, ius cu feugiat admodum. Cu prima civibus temporibus vel, ad eum consul probatus philosophia. Ius cu ubique volumus interesset. Ne doming essent albucius vis, in lorem ponderum splendide qui. Eu agam novum postulant vix.';
        return View::make('welcome', compact('title', 'content'));

    }
}
