<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Validation\ValidationException;

class PartyListController extends Controller
{
    public function home()
    {
        $parties = Party::all(); // Assuming you have a Party model
        return view('admin.partylist.home', compact('parties'));
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

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);

            $party = Party::findOrFail($id);
            $party->update($validated);

            return redirect()->route('party.home')->withSuccess('Party updated successfully!');
        } catch (ValidationException $e) {
            return redirect()->route('party.home')->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->route('party.home')->withErrors(['error' => 'An error occurred while updating the party.'])->withInput();
        }
    }

public function destroy($id)
{
    try {
        $party = Party::findOrFail($id);
        $party->delete();

        return redirect()->route('party.home')->withSuccess('Party deleted successfully!');
    } catch (\Exception $e) {
        return redirect()->route('party.home')->withErrors(['An error occurred while deleting the party.']);
    }
}

}
