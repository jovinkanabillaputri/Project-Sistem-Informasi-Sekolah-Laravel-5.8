
@extends('template')
@section('content')
<div class="content">
        <div class="card">
            <div class="card-header">
<form action="{{ route('jurusan.store') }}" method="post">
    {{ csrf_field() }}
<div class="form-group">
    <label for="nama_jurusan">Nama Jurusan</label>
    <input type="text" name="nama_jurusan" class="form-control" required>
    <p class="text-danger">{{ $errors->first('nama_jurusan') }}</p>         
</div>
<div class="form-group">
    <button class="btn btn-success btn-sn">Simpan</button>
    <a class="btn btn-danger btn-sn" href="{{route ('jurusan.index')}}">Batal</a>
</div>
</form>

@endsection