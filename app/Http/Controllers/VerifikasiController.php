<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikasiController extends Controller
{


    public function index() {
        $verif = Verifikasi::where('departemen', Auth::user()->departemen)->get();

        return view('verifikasi.index', compact('verif'));
    }
}
