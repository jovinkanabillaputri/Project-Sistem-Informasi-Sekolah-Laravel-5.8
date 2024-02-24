
@extends('template')
@section('content')
<div class="content">
        <div class="card">
            <div class="card-header">
<form action="{{ route('kelas.update', $kelas->id) }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="nama_kelas">Nama Kelas</label>
        <input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas }}" required>
        <p class="text-danger">{{ $errors->first('nama_kelas') }}</p>         
    </div>
    <div class="form-group">
        <label for="jurusan_id">Jurusan</label>
        <select class="form-control" name="jurusan_id">
            <option value="">Pilih Jurusan</option>
            @foreach ($jurusan as $k)
                <option value="{{ $k->id }}" @if ($kelas->jurusan_id==$k->id) selected @endif>{{ $k->nama_jurusan }}</option>
            @endforeach
        </select>
        <p class="text-danger">{{ $errors->first('jurusan_id') }}</p>
    </div>
    <div class="form-group">
        <label for="guru_id">Wali Kelas</label>
        <select class="form-control" name="guru_id">
            <option value="">Pilih Wali Kelas</option>
            @foreach ($guru as $k)
                <option value="{{ $k->id }}" @if ($kelas->guru_id==$k->id) selected @endif>{{ $k->nama }}</option>
            @endforeach
        </select>
        <p class="text-danger">{{ $errors->first('guru_id') }}</p>
    </div>
    <div class="form-group">
        <button class="btn btn-success btn-sn">Ubah</button>
        <a class="btn btn-danger btn-sn" href="{{route ('kelas.index')}}">Batal</a>
    </div>
    </form>

    @endsection