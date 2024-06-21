<?php

namespace App\Http\Controllers;

use App\Models\Unit_kerja;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_unit_kerja = UnitKerja::with('unit_kerja')->get();

        return view('unit_kerja.index', [
            'list_unit_kerja' => $list_unit_kerja
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_unit_kerja = UnitKerja::get();

        return view('unit_kerja.create', [
            'list_unit_kerja' => $list_unit_kerja
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required']
        ]);

        UnitKerja::create($data);

        return redirect()->route('unit_kerja.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(UnitKerja $unit_kerja)
    {

        return view('unit_kerja.show', [
            'unit_kerja' => $unit_kerja
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnitKerja $unit_kerja)
    {
        $list_unit_kerja = UnitKerja::get();

        return view('unit_kerja.edit', [
            'unit_kerja' => $unit_kerja,
            'list_unit_kerja' => $list_unit_kerja
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnitKerja $unit_kerja)
    {
        $data = $request->validate([
            'nama' => ['required'],
        ]);

        $unit_kerja->update($data);

        return redirect()->route('unit_kerja.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnitKerja $unit_kerja)
    {
        $unit_kerja->delete();

        return redirect()->route('unit_kerja.index')->with('success', 'data berhasil dihapus');
    }
}
