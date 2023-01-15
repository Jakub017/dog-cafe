<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Offer;


class PagesController extends Controller
{
    public function home() {
        $pets = Pet::orderby('created_at', 'asc')->get();

        $coffees = Offer::where('category_id', 2)->get();
        $teas = Offer::where('category_id', 1)->get();
        $cakes = Offer::where('category_id', 3)->get();
        $treats = Offer::where('category_id', 4)->get();

         return view('welcome', [
            'pets' => $pets,
            'coffees' => $coffees,
            'teas' => $teas,
            'cakes' => $cakes,
            'treats' => $treats,
        ]);
    }
}

