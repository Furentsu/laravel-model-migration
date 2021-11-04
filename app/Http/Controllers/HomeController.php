<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class HomeController extends Controller
{
    public function index() {

        $trips = Trip::all();

        return view('christmas_trips', compact('trips'));
    }
}
