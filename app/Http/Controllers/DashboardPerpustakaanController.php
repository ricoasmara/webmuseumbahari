<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpustakaan = Perpustakaan::orderBy('judul_buku', 'asc');
        if (request('searchtable')) {
            $perpustakaan->where('judul_buku', 'like', '%' . request('searchtable') . '%')
                ->orWhere('rak', 'like', '%' . request('searchtable') . '%');
        }
        // $perpustakaan = Perpustakaan::all();
        // return view('dashboard.posts.index', compact('perpustakaan'));
        return view('dashboard.posts.index', [
            "perpustakaan" => $perpustakaan->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            "perpustakaan" => Perpustakaan::all()
        ]);
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
            'isbn' => 'required|unique:perpustakaans',
            'image' => 'image|file|max:1024'
        ]);
        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }
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
            'detail' => Perpustakaan::find($id)
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
        $perpustakaan = Perpustakaan::find($id);

        $this->validate($request, [
            'judul_buku' => 'required|max:255',
            'call_number' => 'required|max:50',
            'rak' => 'required|max:255',
            'jumlah' => 'required',
            'isbn' => 'required',
            'image' => 'image|file|max:2048'

        ]);
        $perpustakaan->judul_buku = $request->input('judul_buku');
        $perpustakaan->call_number = $request->input('call_number');
        $perpustakaan->rak = $request->input('rak');
        $perpustakaan->jumlah = $request->input('jumlah');
        $perpustakaan->isbn = $request->input('isbn');
        // $perpustakaan->image = $request->input('image');
        if ($request->hasFile('image')) {
            // Menghapus gambar lama jika ada
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $path = $request->file('image')->store('post-images');
            $perpustakaan->image = $path;
        }
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
        // if ($detail->image) {
        //     Storage::delete($detail->oldImage);
        // }
        if (Storage::disk('public')->exists($detail->image)) {
            Storage::disk('public')->delete($detail->image);
        }

        $detail->delete();
        return redirect('/dashboard/posts')->with('success', 'Book has been deleted!');
    }
}