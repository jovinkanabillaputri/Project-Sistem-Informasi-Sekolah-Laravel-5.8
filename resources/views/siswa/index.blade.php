
@extends('template')
@section('content')
<div class="content">
    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Siswa</h4>
                <a href="{{ route('siswa.create') }}"> <button class="btn btn-primary btn-sm">Tambah</button></a>
              </div>
<div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-black">    
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenkel</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $i => $v)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$v->nis}}</td>
                <td>{{$v->nama}}</td>
                <td>{{$v->jenis_kelamin}}</td>
                <td>{{$v->email}}</td>
                <td>{{$v->alamat}}</td>
                <td>{{$v->kelas->nama_kelas}}</td>
                <td>{{$v->jurusan->nama_jurusan}}</td>
                <td>
                    <form action="{{ route('siswa.destroy', $v->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <a href="{{ route('siswa.edit', $v->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endsection