
@extends('template')
@section('content')
<div class="content">
        <div class="card">
            <div class="card-header">
<form action="{{ route('kelas.store') }}" method="post">
    {{ csrf_field() }}
<div class="form-group">
    <label for="nama_kelas">Nama Kelas</label>
    <input type="text" name="nama_kelas" class="form-control" required>
    <p class="text-danger">{{ $errors->first('kelas') }}</p>         
</div>
<div class="form-group">
    <label for="jurusan_id">Jurusan</label>
    <select class="form-control" name="jurusan_id">
        <option value="">Pilih Jurusan</option>
        @foreach ($jurusan as $k)
            <option value="{{ $k->id }}">{{ $k->nama_jurusan }}</option>
        @endforeach
    </select>
    <p class="text-danger">{{ $errors->first('jurusan_id') }}</p>
</div>
<div class="form-group">
    <label for="guru_id">Wali Kelas</label>
    <select class="form-control" name="guru_id">
        <option value="">Pilih Wali Kelas</option>
        @foreach ($guru as $k)
            <option value="{{ $k->id }}">{{ $k->nama }}</option>
        @endforeach
    </select>
    <p class="text-danger">{{ $errors->first('guru_id') }}</p>
</div>
<div class="form-group">
    <button class="btn btn-success btn-sn">Simpan</button>
    <a class="btn btn-danger btn-sn" href="{{route ('kelas.index')}}">Batal</a>
</div>
</form>

@endsection