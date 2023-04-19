<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Museum Bahari</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{($title === "Home")?'active' : ''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === "Perpustakaan")?'active' : ''}}" href="/perpustakaan">Perpustakaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === "Koleksi")?'active' : ''}}" href="/koleksi">Koleksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === "About")?'active' : ''}}" href="/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>