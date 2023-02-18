<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function HomeView()
    {

        return view('home');
    }
}
