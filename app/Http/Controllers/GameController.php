<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    /**
     *  GET         - /photos               - index
     *  GET         - /photos/create        - create
     *  POST        - /photos               - store
     *  GET         - /photos/{photo}       - show
     *  GET         - /photos/{photo}/edit  - edit
     *  PUT/PATCH   - /photos/{photo}       - update
     *  DELETE      - /photos/{photo}       - destroy
     */

    public function index() {
        return Game::all();
    }
    public function create() {}
    public function store() {}
    public function show($id) {}
    public function edit($id) {}
    public function update($id) {}
    public function destroy($id) {}

    public function play() {
        return view('game.play');
    }

    public function place() {
        return view('game.place');
    }

    public function score() {
        return view('game.score');
    }
}