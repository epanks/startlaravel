<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balai;

class BalaiController extends Controller
{
    public function index()
    {
        $data_balai = Balai::all();
        // dd($data_balai);
        return view('balai.index', ['data_balai' => $data_balai]);
    }
}
