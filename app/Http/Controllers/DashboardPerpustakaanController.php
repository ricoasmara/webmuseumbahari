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
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul_buku' => 'required|max:255',
            'call_number' => 'required|max:50',
            'rak' => 'required|max:255',
            'jumlah' => 'required',
            'isbn' => 'required'
        ]);
        Perpustakaan::create($validateData);
        return redirect('/dashboard/posts')->with('success', 'New Book has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = array(
            'title' => "posttest",
            'detail' => Perpustakaan::find($id)
        );
        return view('dashboard.posts.show')->with($detail);
        // return view('dashboard.posts.show', [
        //     'title' => 'Singglepost',
        //     'detail' => $perpustakaan->id
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = array(
            'title' => "edit",
            'perpustakaan' => Perpustakaan::find($id)
        );
        return view('dashboard.posts.edit')->with($detail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validateData = $request->validate([
        //     'judul_buku' => 'required|max:255',
        //     'call_number' => 'required|max:50',
        //     'rak' => 'required|max:255',
        //     'jumlah' => 'required',
        //     'isbn' => 'required'
        // ]);
        // Perpustakaan::where('id', $perpustakaan->id)
        //     ->update($validateData);

        $this->validate($request, [
            'judul_buku' => 'required|max:255',
            'call_number' => 'required|max:50',
            'rak' => 'required|max:255',
            'jumlah' => 'required',
            'isbn' => 'required'
        ]);
        $perpustakaan = Perpustakaan::find($id);
        $perpustakaan->judul_buku = $request->input('judul_buku');
        $perpustakaan->call_number = $request->input('call_number');
        $perpustakaan->rak = $request->input('rak');
        $perpustakaan->jumlah = $request->input('jumlah');
        $perpustakaan->isbn = $request->input('isbn');
        $perpustakaan->save();
        return redirect('/dashboard/posts')->with('success', 'Book has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Perpustakaan::findOrFail($id);
        $detail->delete();
        // Perpustakaan::destroy($perpustakaan->id);
        return redirect('/dashboard/posts')->with('success', 'Book has been deleted!');
    }
}