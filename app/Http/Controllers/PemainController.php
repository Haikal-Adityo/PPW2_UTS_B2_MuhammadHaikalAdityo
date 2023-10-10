<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    //* FUNGSI INDEX
    public function index() {
        $data_pemain = Pemain::all();
        $count = Pemain::count();

        return view('pemain.index', compact('data_pemain', 'count'));
    }
}
