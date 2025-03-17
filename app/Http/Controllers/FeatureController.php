<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Features::all();
        return view('features.index')->with([
                    'Features' => $features
                   ]);
    }
}
