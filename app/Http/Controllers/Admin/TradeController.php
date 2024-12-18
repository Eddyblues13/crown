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

    // Update the specified trade in storage
    public function update(Request $request, Trade $trade)
    {
        $request->validate([
            'asset' => 'required|string',
            'category' => 'required|string',
            'company' => 'required|string',
            'amount' => 'required|numeric',
            'take_profit' => 'nullable|numeric',
            'stop_loss' => 'nullable|numeric',
            'status' => 'required|string',
        ]);

        $trade->update($request->all());

        return redirect()->back()->with('message', 'Trade updated successfully.');
    }

    // Remove the specified trade from storage
    public function destroy(Trade $trade)
    {
        $trade->delete();

        return redirect()->back()->with('message', 'Trade deleted successfully.');
    }
}
