@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Library</h1>
</div>
 @if(session()->has('success'))
  <div class="alert alert-success col-lg-12" role="alert">
  {{ session('success') }}
</div>
  @endif
      <div class="table-responsive col-lg-12">
      <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Data </a>
      <div class="row justify-content-center mb-3">
<div class="col-md-6">
<form action="/dashboard/posts" >
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search Data Book.." name="searchtable" value="{{ request('searchtable') }}" >
  <button class="btn btn-inline-info" type="submit"><span data-feather="search"></button>
</div>
</form>
</div>
</div>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">JUDUL BUKU</th>
              <th scope="col">CALL NUMBER</th>
              <th scope="col">RAK</th>
              <th scope="col">JUMLAH</th>
              <th scope="col">ISBN</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @if($perpustakaan->count())
          
          @foreach($perpustakaan as $detail)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $detail->judul_buku }}</td>
              <td>{{ $detail->call_number }}</td>
              <td>{{ $detail->rak}}</td>
              <td>{{ $detail->jumlah }}</td>
              <td>{{ $detail->isbn}}</td>
              <td>
              <a href="/dashboard/posts/{{$detail->id}}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/posts/{{$detail->id}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/posts/{{$detail->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="bagde bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="trash-2"></span></button>
              </form>
              </td>
            </tr>
         @endforeach
          </tbody>
        </table>
      </div>
      @else
          <h1>Data Not Found!</h1>
          @endif
@endsection