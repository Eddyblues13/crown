<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Trade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TradeController extends Controller
{

    // Display trades for a specific user
    public function index($id)
    {
        // Fetch the user
        $user = User::findOrFail($id);

        // Fetch all trades associated with the user
        //$trades = Trade::where('user_id', $user->id)->get();
        $trades = Trade::with('user')->where('user_id', $id)->get();


        return view('admin.trades', compact('user', 'trades'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'asset' => 'required|string',
            'category' => 'required|string',
            'company' => 'required|string',
            'amount' => 'required|numeric|min:1',
            'take_profit' => 'nullable|numeric|min:0',
            'stop_loss' => 'nullable|numeric|min:0',
        ]);

        Trade::create($validated);

        return redirect()->back()->with('message', 'Trade successfully created!');
    }
}
