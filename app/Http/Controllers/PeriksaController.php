<?php

namespace App\Http\Controllers;

use App\Models\Paramedik;
use App\Models\Pasien;
use App\Models\Periksa;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_periksa = Periksa::with(['pasien', 'dokter'])->get();

        return view('periksa.index', [
            'list_periksa' => $list_periksa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_pasien = Pasien::all();
        $list_dokter = Paramedik::all();

        return view('periksa.create', [
            'list_pasien' => $list_pasien,
            'list_dokter' => $list_dokter,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal' => ['required'],
            'berat' => ['required'],
            'tinggi' => ['required'],
            'tensi' => ['required'],
            'keterangan' => ['required'],
            'pasien_id' => ['required'],
            'dokter_id' => ['required'],
        ]);

        Periksa::create($data);

        return redirect()->route('periksa.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periksa $periksa)
    {
        $list_pasien = Pasien::get();
        $list_paramedik = Paramedik::get();

        return view('periksa.show', [
            'periksa' => $periksa,
            'list_pasien' => $list_pasien,
            'list_paramedik' => $list_paramedik,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periksa $periksa)
    {
        $list_pasien = Pasien::get();
        $list_paramedik = Paramedik::get();

        return view('periksa.edit', [
            'periksa' => $periksa,
            'list_pasien' => $list_pasien,
            'list_paramedik' => $list_paramedik,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periksa $periksa)
    {
        $data = $request->validate([
            'tanggal' => ['required'],
            'berat' => ['required'],
            'tinggi' => ['required'],
            'tensi' => ['required'],
            'keterangan' => ['required'],
            'pasien_id' => ['required'],
            'dokter_id' => ['required'],
        ]);

        $periksa->update($data);

        return redirect()->route('periksa.index')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periksa $periksa)
    {
        $periksa->delete();

        return redirect()->route('periksa.index')->with('success', 'data berhasil dihapus');
    }
}
