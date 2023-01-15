<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;


class PagesController extends Controller
{
    public function home() {
        $pets = Pet::orderby('created_at', 'asc')->get();

         return view('welcome', [
            'pets' => $pets,
        ]);
    }
}

