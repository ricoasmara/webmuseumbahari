<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;

class DashboardPerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            "perpustakaan" => Perpustakaan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perpustakaan $detail)
    {
        return view('dashboard.posts.show', [
            'detail' => $detail
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perpustakaan $perpustakaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perpustakaan $perpustakaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perpustakaan $perpustakaan)
    {
        //
    }
}