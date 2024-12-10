<?php

namespace App\Http\Controllers\Admin;

use App\Models\Trader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TraderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traders = Trader::all();
        return view('admin.traders.index', compact('traders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.traders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'trader_name' => 'required|string|max:255',
            'trading_max_amount' => 'required|string|max:255',
            'trading_min_amount' => 'required|string|max:255',
            'top_up_interval' => 'required|string|max:255',
            'top_up_type' => 'required|string|max:255',
            'top_up_amount' => 'required|string|max:255',
            'investment_duration' => 'required|string|max:255',
            'trader_year_of_experience' => 'required|string|max:255',
            'copier_roi' => 'required|string|max:255',
            'risk_index' => 'required|string|max:255',
            'performance' => 'required|string|max:255',
            'total_copied_trade' => 'required|string|max:255',
            'active_traders' => 'required|string|max:255',
            'trader_country' => 'required|string|max:255',
            'about_trader' => 'required|string|max:500',
            'followers' => 'required|numeric',  // Validate followers field
            'verified_status' => 'required|',  // Validate verified status field
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/traders'), $fileName);
            $validated['picture'] = 'uploads/traders/' . $fileName;
        }

        Trader::create($validated);

        return redirect()->route('traders.index')->with('success', 'Trader created successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function show(Trader $trader)
    {
        return view('admin.traders.show', compact('trader'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function edit(Trader $trader)
    {
        return view('admin.traders.edit', compact('trader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trader $trader)
    {
        // Validate input fields
        $validated = $request->validate([
            'trader_name' => 'required|string|max:255',
            'trading_min_amount' => 'required|numeric',
            'trading_max_amount' => 'required|numeric',
            'top_up_interval' => 'required|string',
            'top_up_type' => 'required|string',
            'top_up_amount' => 'required|numeric',
            'investment_duration' => 'required|string',
            'trader_year_of_experience' => 'required|numeric',
            'copier_roi' => 'required|numeric',
            'risk_index' => 'required|numeric',
            'performance' => 'required|string',
            'total_copied_trade' => 'required|numeric',
            'active_traders' => 'required|numeric',
            'trader_country' => 'required|string',
            'about_trader' => 'required|string',
            'followers' => 'required|numeric',  // Validate followers field
            'verified_status' => 'required|boolean',  // Validate verified status field
            'picture' => 'nullable|image|max:2048', // Optional for update
        ]);

        // Check if a new picture is uploaded
        if ($request->hasFile('picture')) {
            // Delete the old picture if it exists
            if ($trader->picture && file_exists(public_path($trader->picture))) {
                unlink(public_path($trader->picture));
            }

            // Save the new picture
            $file = $request->file('picture');
            $filename = time() . '_trader.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/traders/'), $filename);
            $validated['picture'] = 'uploads/traders/' . $filename;
        }

        // Update trader details
        $trader->update($validated);

        return redirect()->route('traders.index')->with('success', 'Trader updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trader $trader)
    {
        $trader->delete();

        return redirect()->route('traders.index')->with('success', 'Trader deleted successfully!');
    }
}
