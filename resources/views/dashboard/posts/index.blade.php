@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Library</h1>
</div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">JUDUL BUKU</th>
              <th scope="col">CALL NUMBER</th>
              <th scope="col">RAK</th>
              <th scope="col">JUMLAH</th>
              <th scope="col">ISBN</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
              <td>text</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
@endsection