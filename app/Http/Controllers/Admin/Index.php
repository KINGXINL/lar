<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
    /**
     * 后台首页
     */
    public function Index()
    {
        return view('index');
    }
}
