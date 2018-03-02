<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use View;

class CardsController extends Controller
{
    public function index(){
//        $title = 'Cards';
//        return View::make('cards', compact('title'));
//        $cards = DB::table('cards')->get();
        $cards = Card::all();
        $oneCard = Card::find(1);
        return View::make('cards.index', compact('cards', 'oneCard'));
    }

//    public function show(Card $card){
//        return View::make('cards.show', compact('card'));
//    }

public function show($id){
        $card = Card::find($id);
        return View::make('cards.show', compact('card'));
}
}
