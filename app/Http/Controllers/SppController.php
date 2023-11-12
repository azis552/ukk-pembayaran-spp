<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spps = Spp::get();
        return view('spp.index',compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sppId = Spp::generateIdSpp();
        return view('spp.create',compact('sppId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rupiahInput = $request->input('nominal');

        // Bersihkan nilai dari karakter non-angka
        $cleanedValue = preg_replace("/[^0-9]/", "", $rupiahInput);

        // Konversi ke tipe data yang sesuai, misalnya integer
        $nominal = (int) $cleanedValue;

        $this->validate($request, [
            'id_spp'     => 'required',
            'tahun'   => 'required',
            'nominal' => 'required'
        ]);

        Spp::create([
            'id_spp'     => $request->id_spp,
            'tahun'   => $request->tahun,
            'nominal' => $nominal
        ]);

        return redirect()->route('spp.index')->with(['success' => 'Data Berhasil Disimpan!']);

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
