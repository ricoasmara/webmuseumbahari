@extends('layouts.main')
@section('container')
<article>
<img src="https://source.unsplash.com/1200x400?{{ $perpustakaan->judul_buku }}"class="card-img-top" alt="{{ $perpustakaan->judul_buku }}">
<h1 class="mb-5">{{ $perpustakaan->judul_buku }}<h1>
<a href="/perpustakaan">back to perpustakaan</a>
</article>
@endsection