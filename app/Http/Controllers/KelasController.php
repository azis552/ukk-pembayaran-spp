<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass = Kelas::get();
        return view('kelas.index',compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelasId = Kelas::generateKelasId(); 
        return view('kelas.formKelas',compact('kelasId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_kelas'     => 'required',
            'kompetensi_keahlian'   => 'required'
        ]);

        Kelas::create([
            'id_kelas' => $request->id_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian
        ]);

        return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
