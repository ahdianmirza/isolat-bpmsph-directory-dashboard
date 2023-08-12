<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directory;

class DirectoryController extends Controller
{
    public function index()
    {
        return view('directory.index', [
            'title' => "Directory",
            'directories' => Directory::all()
        ]);
    }

    public function create()
    {
        return view('directory.create');
    }
}