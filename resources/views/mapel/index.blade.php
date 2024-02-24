
@extends('template')
@section('content')
<div class="content">
    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Mata Pelajaran</h4>
                <a href="{{ route('mapel.create') }}"> <button class="btn btn-primary btn-sm">Tambah</button></a>
              </div>
<div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-black">    
            <tr>
                <th>No</th>
                <th>Nama Mata Pelajaran</th>
                <th>Hari</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                {{-- <th>Guru</th> --}}
                <th>Kelas</th>
                <th>Jurusan</th>
                    {{-- <th>Created At</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($mapel as $i => $v)
        <tr>
            <td>{{$i+1}}</td>
            <td>{{$v->nama_mapel}}</td>
            <td>{{$v->hari}}</td>
            <td>{{$v->jam_mulai}}</td>
            <td>{{$v->jam_selesai}}</td>
            {{-- <td>{{$v->guru->nama_guru}}</td> --}}
            <td>{{$v->kelas->nama_kelas}}</td>
            <td>{{$v->jurusan->nama_jurusan}}</td>
              {{-- <td>{{$v->created_at}}</td> --}}
              <td>
                <form action="{{ route('mapel.destroy', $v->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="{{ route('mapel.edit', $v->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection