<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('layouts.public', ['comics' => $comics]);
    }
}
