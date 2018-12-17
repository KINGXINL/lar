<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('auths');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = (object)'';
        $user->id = 4;
        return view('home.index',['user' => $user]);
    }

    public function show(Request $request)
    {
        return view('home');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
