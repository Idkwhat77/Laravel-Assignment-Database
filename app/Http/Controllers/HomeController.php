<?php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use App\Models\Cake; // <-- Import the model

class HomeController extends Controller
{
    public function index()
    {
        // Remove the array and replace it with this:
        $cakes = Cake::all();

        return view('home', compact('cakes'));
    }
}