<?php

namespace App\Http\Controllers\Brand;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        return view('brand.index');
    }
    public function edit()
    {
        return view('brand.edit');
    }
}
