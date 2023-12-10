<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = DB::table('mahasiswa')->get();
        return view('tampilan', compact('mahasiswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'hobi' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa created successfully');
    }
}
