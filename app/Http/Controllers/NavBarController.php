<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavBarController extends Controller
{
    public function whyus(){
    return view('navbar.whyus');
    }

    public function testimonies(){
        return view('navbar.testimonies');
    }

    public function contact(){
        return view('navbar.contact');
    }
}
