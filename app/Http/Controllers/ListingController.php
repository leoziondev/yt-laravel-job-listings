<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListingFormRequest;
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

    public function create()
    {
        return view('listings.create');
    }

    public function store(StoreListingFormRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($data);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    public function edit(Listing $listing)
    {
        return view('listings.edit', compact('listing'));
    }

    public function update(StoreListingFormRequest $request, Listing $listing)
    {
        $data = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($data);

        return back()->with('message', 'Listing updated successfully!');
    }
}
