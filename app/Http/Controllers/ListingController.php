<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        $listings = Listing::latest()->filter(request(['tag', 'search']))->paginate(5);

        return view('listings.index', compact('listings'));
    }

    // Show single listing
    public function show(Listing $listing)
    {


        return view('listings.show', compact('listing'));
    }
}
