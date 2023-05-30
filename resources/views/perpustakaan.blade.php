
@extends('layouts.main')
@section('container')
<div class="containerbtn d-grid gap-2 d-md-flex justify-content-md-end"> 
<a href="/login" type="button" class="btn btn-primary"><i class="bi bi-box-arrow-in-right"></i> Login</a>
</div>
<h1>Halaman Pepustakaan</h1>
@foreach($post as $post)
<article class="mb-5">
<h2>
    <a href="/perpustakaan/{{ $post ["slug"] }}">{{ $post["title"]  }}</a>
</h2>
<h5>by :{{$post["author"]}}</h5>
<p>{{$post["body"]}}</p>
</article>
@endforeach

@endsection

