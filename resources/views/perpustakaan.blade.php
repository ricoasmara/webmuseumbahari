
@extends('layouts.main')
@section('container')
<h1>Halaman Pepustakaan</h1>
@foreach($post as $post)
<article class="mb-5">
<h2>{{$post["title"]}}</h2>
<h5>by :{{$post["author"]}}</h5>
<p>{{$post["body"]}}</p>
</article>
@endforeach
@endsection

