<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directory;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard', [
            'title' => 'Dashboard',
            'directories' => Directory::latest()->filter(request(['search']))->get()
        ]);
    }

}