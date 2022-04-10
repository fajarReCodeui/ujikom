<?php

namespace App\Http\Controllers\Uom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UomController extends Controller
{
    public function index()
    {
        return view('uom.index');
    }
    public function edit()
    {
        return view('uom.edit');
    }
}
