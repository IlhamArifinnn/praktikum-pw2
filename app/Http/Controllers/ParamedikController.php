<?php

namespace App\Http\Controllers;

use App\Models\Paramedik;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class ParamedikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_paramedik = Paramedik::with('unit_kerja')->get();

        return view('paramedik.index', [
            'list_paramedik' => $list_paramedik
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_unit_kerja = UnitKerja::get();

        return view('paramedik.create', [
            'list_unit_kerja' => $list_unit_kerja
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required'],
            'gender' => ['required'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
            'kategori' => ['required'],
            'telpon' => ['required'],
            'alamat' => ['required'],
            'unit_kerja_id' => ['required'],
        ]);

        Paramedik::create($data);

        return redirect()->route('paramedik.index')->with('success', 'data berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Paramedik $paramedik)
    {
        return view('paramedik.show', [
            'paramedik' => $paramedik
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paramedik $paramedik)
    {
        $list_unit_kerja = UnitKerja::get();
        $list_kategori = ['Dokter', 'Perawat', 'Bidan', 'Apoteker', 'Ahli Gizi', 'Teknisi Laboratorium', 'Radiografer', 'Farmasis', 'Fisioterafis'];


        return view('paramedik.edit', [
            'paramedik' => $paramedik,
            'list_unit_kerja' => $list_unit_kerja,
            'list_kategori' => $list_kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paramedik $paramedik)
    {
        $data = $request->validate([
            'nama' => ['required'],
            'gender' => ['required'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
            'kategori' => ['required'],
            'telpon' => ['required',],
            'alamat' => ['required'],
            'unit_kerja_id' => ['required'],
        ]);

        $paramedik->update($data);

        return redirect()->route('paramedik.index')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paramedik $paramedik)
    {
        $paramedik->delete();

        return redirect()->route('paramedik.index')->with('success', 'data berhasil dihapus');
    }
}
