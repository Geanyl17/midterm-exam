<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\features;
use resources\views;

class FeatureController extends Controller
{
    public function index()
    {
        $features = features::all();
        return view('features')->with([
                    'features' => $features
                   ]);
    }
}
