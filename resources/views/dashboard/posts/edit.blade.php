@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Edit Data Book</h1>
</div>

<div class="col-lg-8">
<form method="post" Action="/dashboard/posts/{{ $perpustakaan->id }}">
@method('put')
@csrf
  <div class="mb-3">
    <label for="judul_buku" class="form-label">Judul Buku</label>
    <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" id="judul_buku" name="judul_buku" required autofocus value="{{ old('judul_buku', $perpustakaan->judul_buku) }}">
  @error('judul_buku')
  <div class="invalid-feedback">
  {{ $message }}
    </div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="call_number" class="form-label">Call Number`</label>
    <input type="text" class="form-control @error('call_number') is-invalid @enderror" id="call_number" name="call_number" required value="{{ old('call_number',$perpustakaan->call_number) }}">
   @error('call_number')
  <div class="invalid-feedback">
  {{ $message }}
    </div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="rak" class="form-label">Rak</label>
    <input type="text" class="form-control @error('rak') is-invalid @enderror" id="rak" name="rak" required value="{{ old('rak',$perpustakaan->rak) }}">
   @error('rak')
  <div class="invalid-feedback">
  {{ $message }}
    </div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="jumlah" class="form-label">Jumlah</label>
    <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" required value="{{ old('jumlah',$perpustakaan->jumlah) }}">
   @error('jumlah')
  <div class="invalid-feedback">
  {{ $message }}
    </div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="isbn" class="form-label">Isbn</label>
    <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" required value="{{ old('isbn',$perpustakaan->isbn) }}">
   @error('isbn')
  <div class="invalid-feedback">
  {{ $message }}
    </div>
  @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Update Data Book</button>
</form>
<div>

@endsection