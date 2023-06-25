<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];



    public function detail()
    {
        return $this->hasMany(Perpustakaan::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function scopeFilter($query)
    {
        if (request('searchtable')) {
            return $query->where('judul_buku', 'like', '%' . request('searchtable') . '%')
                ->orWhere('rak', 'like', '%' . request('searchtable') . '%');
        }
    }
}