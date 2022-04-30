<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $listings = Listing::latest()->filter(request(['tag', 'search']))->limit(6)->get();

        return view("home", compact('listings'));
    }
}
