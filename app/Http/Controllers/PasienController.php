<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $list_pasien = Pasien::with('kelurahan')->get();

        return view('pasien.index', [
            'list_pasien' => $list_pasien
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_kelurahan = Kelurahan::get();

        return view('pasien.create', [
            'list_kelurahan' => $list_kelurahan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode' => ['required'],
            'nama' => ['required'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'alamat' => ['required'],
            'kelurahan_id' => ['required'],
        ]);

        Pasien::create($data);

        return redirect()->route('pasien.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        return view('pasien.show', [
            'pasien' => $pasien
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        $list_kelurahan = Kelurahan::get();

        return view('pasien.edit', [
            'pasien' => $pasien,
            'list_kelurahan' => $list_kelurahan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $data = $request->validate([
            'kode' => ['required'],
            'nama' => ['required'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'alamat' => ['required'],
            'kelurahan_id' => ['required'],
        ]);

        $pasien->update($data);

        return redirect()->route('pasien.index')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return redirect()->route('pasien.index')->with('success', 'data berhasil dihapus');
    }
}
