<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rak;

class RakController extends Controller
{
    public function create() {
        return view('rak.create', [
            'title' => 'Add New Rak'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|unique:raks|max:255',
            'slug' => 'required|unique:raks|max:255'
        ]);

        Rak::create($validatedData);
        return redirect('/directory/create')->with('success', 'New rak has been added');
    }
}