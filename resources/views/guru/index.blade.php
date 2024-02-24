
@extends('template')
@section('content')
    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Guru</h4>
                <a href="{{ route('guru.create') }}"> <button class="btn btn-primary btn-sm">Tambah</button></a>
              </div>
<div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-black">    
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No Hp</th>
                <th>Alamat</th>
                {{-- <th>Mata Pelajaran</th> --}}
                {{-- <th>Created At</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guru as $i => $v)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$v->nip}}</td>
                <td>{{$v->nama}}</td>
                <td>{{$v->jenis_kelamin}}</td>
                <td>{{$v->no_hp}}</td>
                <td>{{$v->alamat}}</td>
                {{-- <td>{{$v->mapel->nama_mapel}}</td> --}}
                {{-- <td>{{$v->created_at}}</td> --}}
                <td>
                    <form action="{{ route('guru.destroy', $v->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <a href="{{ route('guru.edit', $v->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>

    @endsection