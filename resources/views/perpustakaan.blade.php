@extends('layouts.main')
@section('container')

<div class="container">
  <ul class="navbar-nav ms-auto">
    @auth
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="/logout" method="post"> 
              @csrf
              <button type="submit"class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
            </form>    
          </ul>
        </li>
    @else
    <li class="nav-item">
    <a href="/login" class="nav-link  {{($title === "login")?'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
    </li>
  </ul>
  @endauth
</div>

<div class="row justify-content-center mb-3">
<div class="col-md-6">
<form action="/perpustakaan" >
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search.." name="search" >
  <button class="btn btn-inline-info" type="submit"><i class="bi bi-search"></i></button>
</div>
</form>
</div>
</div>
@if($perpustakaan->count())
  
  
<div class="container">
<div class="row">
@foreach($perpustakaan as $detail)
<div class="col-md-4 mb-3">
<div class="card mb-3">
@if($detail->image)
<div style="max-height: 200px; overflow:hidden;">
   <img src="{{ asset('storage/'. $detail->image) }}" class="card-img-top" alt="...">
  </div>
    @else
     <img src="https://source.unsplash.com/200x200?{{ $detail->judul_buku }}" class="card-img-top" alt="...">
  <div class="card-body">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{ $detail->judul_buku }}</h5>
    <p class="card-text"><small class="text-muted">{{ $detail->created_at->diffForHumans()}}</small>
    </p>
    {{-- <a href="/perpustakaan/{{ $detail->id }}" class="btn btn-primary">Detail Book</a> --}}
  </div>
</div>
</div>
@endforeach
</div>
</div>
@else
<p class="text-center fs-4">Not Found </p>
@endif
@endsection

