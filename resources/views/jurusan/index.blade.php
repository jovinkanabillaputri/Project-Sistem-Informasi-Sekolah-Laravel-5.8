
@extends('template')
@section('content')
<div class="content">
    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Jurusan</h4>
                <a href="{{ route('jurusan.create') }}"> <button class="btn btn-primary btn-sm">Tambah</button></a>
              </div>
<div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-black">    
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                    {{-- <th>Created At</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($jurusan as $i => $v)
        <tr>
            <td>{{$i+1}}</td>
            <td>{{$v->nama_jurusan}}</td>
              {{-- <td>{{$v->created_at}}</td> --}}
              <td>
                <form action="{{ route('jurusan.destroy', $v->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="{{ route('jurusan.edit', $v->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection