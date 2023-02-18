<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(){
        $users=User::paginate(7);
        $images=Image::all();
        return view('dashboard.EditAdmins',compact('users'),compact('images'));
    }
}
