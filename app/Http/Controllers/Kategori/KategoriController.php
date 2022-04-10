<?php

namespace App\Http\Controllers\Kategori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori.index');
    }
    public function edit()
    {
        return view('kategori.edit');
    }
}
