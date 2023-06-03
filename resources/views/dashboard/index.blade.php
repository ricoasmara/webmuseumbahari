
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
<h1>Welcome, Rico</h1>

<!-- css -->
<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">

<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
