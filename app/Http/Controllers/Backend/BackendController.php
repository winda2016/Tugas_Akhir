<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bookingaca;
use App\Models\Bookingcut;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()  {
        $data_haircut = Bookingcut::where('cek_kelengkapan', 1)->get();
        $data_academy = Bookingaca::where('cek_kelengkapan', 1)->get();
        return view ('backend.index',[
            'data_haircut' => $data_haircut,
            'data_academy' => $data_academy,
        ]);
    }
}
