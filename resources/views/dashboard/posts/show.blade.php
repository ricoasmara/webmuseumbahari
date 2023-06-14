@extends('dashboard.layouts.main')
@section('container')
<div class="container">
<div class="card text-justify" style="width: 24rem;">
  <img src="https://source.unsplash.com/200x200?{{ $detail->judul_buku }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $detail->judul_buku }}</h5>
    <p class="card-text">Call Number ={{ $detail->call_number }}</p>
    <p class="card-text">Rak Buku    ={{ $detail->rak }}</p>
    <p class="card-text">Jumlah Buku ={{ $detail->jumlah }}</p>
    <p class="card-text">Isbn        ={{ $detail->isbn }}</p>
     <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back To Dashboard</a>
     <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
    <form action="/dashboard/posts/{{$detail->id}}" method="post" class="d-inline">
      @method('delete')
      @csrf
     <button class="btn bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="trash-2"></span>Delete</button>
    </form>
  </div>
</div>
</div>

@endsection