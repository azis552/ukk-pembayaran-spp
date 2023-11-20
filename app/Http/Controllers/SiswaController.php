<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::get();
        return view('siswa.index',compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $spp = Spp::get();
        $kelas = Kelas::get();
        return view('siswa.create',compact('spp','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nisn' => 'required',
            'nis' => 'required',
            'nama'=> 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_kelas' => 'required',
            'id_spp' => 'required'
        ]);

        Siswa::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'alamat'=> $request->alamat,
            'no_telp'=> $request->no_telp,
            'id_kelas' => $request->id_kelas,
            'id_spp' => $request->id_spp
        ]);

        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
