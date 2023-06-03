
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





<!-- <div class="containerbtn">   

<div class="dropdown">
  <button href="/login" class="btn btn-secondary dropdown-toggle bi bi-box-arrow-in-right" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  Welcome, 
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard </a></li>
    <li><hr class="dropdown-divider"></li>
    <li>
    <form action="/logout" method="post"> 
        @csrf
<button type="submit"class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
    </form>    
  </ul>
</div>
</div> -->


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

