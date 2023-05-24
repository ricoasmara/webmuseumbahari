
@extends('layouts.main')
@section('container')
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
<link rel="stylesheet" href="css/home.css"
@endsection

