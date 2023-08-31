<?php

namespace App\Http\Controllers;

use App\Models\Directory;
use App\Models\Rak;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('directory.index', [
            'title' => "Directory",
            'directories' => Directory::latest()->filter(request(['search']))->get()
        ]);
    }

    public function search(Request $request) {
        $search = $request->search;
        $title = 'Directory';

        $directories = Directory::where(function($query) use ($search) {
            $query->where('mitra', 'like', "%$search%")
                ->orWhere('kode_isolat', 'like', "%$search%")
                ->orWhere('jenis', 'like', "%$search%")
                ->orWhere('tahun', 'like', "%$search%")
                ->orWhere('keterangan', 'like', "%$search%");
        })
        ->orWhereHas('rak', function($query) use ($search) {
            $query->where('name', 'like', "%$search%");
        })->get();

        return view('directory.index', compact('directories', 'search', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('directory.create', [
            'title' => 'Add Data Directory',
            'raks' => Rak::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mitra' => 'required|max:255',
            'kode_isolat' => 'required|max:255',
            'rak_id' => 'required',
            'jenis' => 'required|max:255',
            'tahun' => 'required|max:255',
            'keterangan' => 'required|max:255'
        ]);

        Directory::create($validatedData);
        return redirect('/directory')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Directory $directory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Directory $directory)
    {
        return view('directory.edit', [
            'title' => 'Update Data Directory',
            'directory' => $directory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Directory $directory)
    {
        $validatedData = $request->validate([
            'mitra' => 'required|max:255',
            'kode_isolat' => 'required|max:255',
            'rak' => 'required|max:255',
            'jenis' => 'required|max:255',
            'tahun' => 'required|max:255',
            'keterangan' => 'required|max:255'
        ]);

        Directory::where('id', $directory->id)
                ->update($validatedData);
        return redirect('/directory')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Directory $directory)
    {
        Directory::destroy($directory->id);
        return redirect('/directory')->with('success', 'Data has been deleted!');
    }
}