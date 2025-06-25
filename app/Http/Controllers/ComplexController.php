<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Person;

class ComplexController extends Controller
{
    public function index()
    {
        $complexes = Complex::all();
        return view('complexes.index', compact('complexes'));
    }

    public function create()
    {
        $people = Person::all();
        return view('complexes.create', compact('people'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:191',
            'address' => 'required|string',
            'floors' => 'required|integer|min:1',
            'parking_spaces' => 'required|integer|min:0',
            'manager_person_id' => 'nullable|exists:people,id',
        ]);

        Complex::create($validated);

        return redirect()->route('complexes.index')
            ->with('success', 'Complex created successfully.');
    }

    public function edit(Complex $complex)
    {
        $people = Person::all();
        return view('complexes.edit', compact('complex', 'people'));
    }

    public function update(Request $request, Complex $complex)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:191',
            'address' => 'required|string',
            'floors' => 'required|integer|min:1',
            'parking_spaces' => 'required|integer|min:0',
            'manager_person_id' => 'nullable|exists:people,id',
        ]);

        $complex->update($validated);

        return redirect()->route('complexes.index')
            ->with('success', 'Complex updated successfully.');
    }

    public function destroy(Complex $complex)
    {
        $complex->delete();

        return redirect()->route('complexes.index')
            ->with('success', 'Complex deleted successfully.');
    }
}
