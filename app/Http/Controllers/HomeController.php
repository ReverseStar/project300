<?php

namespace StudentsForum\Http\Controllers;

use Illuminate\Http\Request;
use StudentsForum\Discussion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $discussions = Discussion::where('user_id',auth()->id())->orderBy('created_at','desc')->paginate(5);
        return view('home')->with('discussions',$discussions);
    }
}
