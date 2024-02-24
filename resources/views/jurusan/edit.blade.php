
@extends('template')
@section('content')
<div class="content">
        <div class="card">
            <div class="card-header">
<form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
<div class="form-group">
    <label for="nama_jurusan">Nama Jurusan</label>
    <input type="text" name="nama_jurusan" class="form-control"  value="{{ $jurusan->nama_jurusan }}" required>
    <p class="text-danger">{{ $errors->first('nama_jurusan') }}</p>
</div>
<div class="form-group">
    <button class="btn btn-sucess btn-sn">Ubah</button>
    <a class="btn btn-danger btn-sn" href="{{route ('jurusan.index')}}">Batal</a>
</div>
</form>

@endsection