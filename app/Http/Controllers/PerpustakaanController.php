<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perpustakaan;

class PerpustakaanController extends Controller
{
    public function index()
    {
        $perpustakaan = Perpustakaan::latest();
        if (request('search')) {
            $perpustakaan->where('judul_buku', 'like', '%' . request('search') . '%');
        }
        return view('perpustakaan', [
            "title" => "Perpustakaan",
            "perpustakaan" => $perpustakaan->get()

        ]);
    }
    public function show($id)
    {
        return view('detailbuku', [
            "title" => "Singgle Post",
            "perpustakaan" => Perpustakaan::find($id)
        ]);

    }
    public function destroy(Perpustakaan $detail)
    {
        Perpustakaan::destroy($detail->id);
        return redirect('/dashboard/posts')->with('success', 'Book has been deleted');
    }
}