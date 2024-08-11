<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Validation\ValidationException;

class PartyListController extends Controller
{
    public function home(){
        return view('admin.partylist.home');
    }

    public function add(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);

            Party::create($validated);
            return redirect()->route('party.home')->withSuccess('Party created successfully!');
        } catch (ValidationException $e) {
            return redirect()->route('party.home')->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->route('party.home')->withErrors(['An error occurred while creating the party.']);
        }
    }
}
