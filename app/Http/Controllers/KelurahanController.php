<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kelurahan = Kelurahan::with('kelurahan')->get();

        return view('kelurahan.index', [
            'list_kelurahan'     => $list_kelurahan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_kelurahan = Kelurahan::get();

        return view('kelurahan.create', [
            'list_kelurahan' => $list_kelurahan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required'],
        ]);

        Kelurahan::create($data);

        return redirect()->route('kelurahan.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelurahan $kelurahan)
    {
        return view('kelurahan.show', [
            'kelurahan' => $kelurahan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelurahan $kelurahan)
    {
        $list_kelurahan = Kelurahan::get();

        return view('kelurahan.edit', [
            'kelurahan' => $kelurahan,
            'list_kelurahan' => $list_kelurahan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelurahan $kelurahan)
    {
        $data = $request->validate([
            'nama' => ['required'],
        ]);

        $kelurahan->update($data);

        return redirect()->route('kelurahan.index')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelurahan $kelurahan)
    {
        $kelurahan->delete();

        return redirect()->route('kelurahan.index')->with('success', 'data berhasil dihapus');
    }
}
