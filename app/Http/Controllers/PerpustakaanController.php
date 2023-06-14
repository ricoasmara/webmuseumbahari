<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perpustakaan;

class PerpustakaanController extends Controller
{
    public function index()
    {
        return view('perpustakaan', [
            "title" => "Perpustakaan",
            "perpustakaan" => Perpustakaan::all()

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