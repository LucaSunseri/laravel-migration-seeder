<?php

namespace App\Http\Controllers;

use App\Viaggio;
use Illuminate\Http\Request;

class ViaggiController extends Controller
{
    public function index()
    {
        $viaggi = Viaggio::all();
        return view('viaggi', compact('viaggi'));
    }
}
