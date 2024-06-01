<?php

namespace App\Http\Controllers;

use App\Models\Paramedik;
use Illuminate\Http\Request;

class ParamedikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_paramedik = Paramedik::all();
        return view('paramedik.index', ['list_paramedik' => $list_paramedik]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Paramedik $paramedik)
    {
        $list_paramedik = Paramedik::all();
        return view('paramedik.index', ['list_paramedik' => $list_paramedik]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paramedik $paramedik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paramedik $paramedik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paramedik $paramedik)
    {
        //
    }
}
