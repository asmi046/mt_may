<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index($slug) {

        $tour_info = Tour::where('slug', $slug)->firstOrFail();
        return view('tour_page', ['tour_info' => $tour_info]);
    }
}
