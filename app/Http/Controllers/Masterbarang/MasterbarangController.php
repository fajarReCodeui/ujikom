<?php

namespace App\Http\Controllers\Masterbarang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterbarangController extends Controller
{
    public function index()
    {
        return view('masterbarang.index');
    }
    public function create()
    {
        return view('masterbarang.create');
    }
    public function edit()
    {
        return view('masterbarang.edit');
    }
    public function show()
    {
        return view('masterbarang.show');
    }
}
