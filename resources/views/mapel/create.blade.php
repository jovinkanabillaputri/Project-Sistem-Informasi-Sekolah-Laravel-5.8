
@extends('template')
@section('content')
<div class="content">
        <div class="card">
            <div class="card-header">
<form action="{{ route('mapel.store') }}" method="post">
    {{ csrf_field() }}
<div class="form-group">
    <label for="nama_mapel">Nama Mata Pelajaran</label>
    <input type="text" name="nama_mapel" class="form-control" required>
    <p class="text-danger">{{ $errors->first('nama_mapel') }}</p>           
</div>
<div class="form-group">
    <label for="hari">Hari</label>
    <input type="text" name="hari" class="form-control" required>
    <p class="text-danger">{{ $errors->first('hari') }}</p>           
</div>
<div class="form-group">
    <label for="jam_mulai">Jam Mulai</label>
    <input type="time" name="jam_mulai" class="form-control" required>
    <p class="text-danger">{{ $errors->first('jam_mulai') }}</p>           
</div>
<div class="form-group">
    <label for="jam_selesai">Jam Selesai</label>
    <input type="time" name="jam_selesai" class="form-control" required>
    <p class="text-danger">{{ $errors->first('jam_selesai') }}</p>           
</div>
{{-- <div class="form-group">
    <label for="guru_id">Nama Guru</label>
    <select class="form-control" name="guru_id">
        <option value="">Pilih Guru</option>
        @foreach ($guru as $k)
            <option value="{{ $k->id }}">{{ $k->nama_guru }}</option>
        @endforeach
    </select>
    <p class="text-danger">{{ $errors->first('guru_id') }}</p>
</div> --}}
<div class="form-group">
    <label for="kelas_id">Kelas</label>
    <select class="form-control" name="kelas_id">
        <option value="">Pilih Kelas</option>
        @foreach ($kelas as $k)
            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
        @endforeach
    </select>
    <p class="text-danger">{{ $errors->first('kelas_id') }}</p>
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
    <button class="btn btn-success btn-sn">Simpan</button>
    <a class="btn btn-danger btn-sn" href="{{route ('mapel.index')}}">Batal</a>
</div>
</form>

@endsection