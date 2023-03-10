<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_proker;

class ProkerController extends Controller
{
    public function index()
    {
        $proker = tbl_proker::all();
        return view('sneat.html.proker', compact(['proker']));
    }

    public function store(Request$request)
    {
        proker::create($request->except(['_token','submit']));
        return redirect('/proker');
    }
}
