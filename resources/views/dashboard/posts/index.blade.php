@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Library</h1>
</div>
      <div class="table-responsive col-lg-10">
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
              <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
              <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
              </td>
            </tr>
         @endforeach
          </tbody>
        </table>
      </div>
@endsection