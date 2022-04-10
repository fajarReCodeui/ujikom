<?php

namespace App\Http\Controllers\Masterbarang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestbarangController extends Controller
{
    public function edit()
    {
       return view('masterbarang.request.edit');
    }
}
