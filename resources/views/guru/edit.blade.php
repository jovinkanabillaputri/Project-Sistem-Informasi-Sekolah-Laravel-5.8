
@extends('template')
@section('content')
<div class="content">
        <div class="card">
            <div class="card-header">
<form action="{{ route('guru.update', $guru->id) }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="nip">NIP</label>
        <input type="decimal" name="nip" class="form-control"  value="{{ $guru->nip }}" required>
        <p class="text-danger">{{ $errors->first('nip') }}</p>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control"  value="{{ $guru->nama }}" required>
        <p class="text-danger">{{ $errors->first('nama') }}</p>
    </div>
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="radio" name="jenis_kelamin"  value="laki-laki" {{ $guru->jenis_kelamin == 'laki-laki' ? 'checked' : '' }}
        class="form-control" required>Laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan"  {{ $guru->jenis_kelamin == 'perempuan' ? 'checked' : '' }}
        class="form-control" required>Perempuan
        <p class="text-danger">{{ $errors->first('jenis_kelamin') }}</p>
    </div>
    <div class="form-group">
        <label for="no_hp">No Handphone</label>
        <input type="decimal" name="no_hp" class="form-control"  value="{{ $guru->no_hp }}" required>
        <p class="text-danger">{{ $errors->first('no_hp') }}</p>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control" required>{{ $guru->alamat }} </textarea>
        </textarea>
        <p class="text-danger">{{ $errors->first('alamat') }}</p>
    </div>
    {{-- <div class="form-group">
        <label for="mapel_id">Mata Pelajaran</label>
        <select class="form-control" name="mapel_id">
            <option value="">Pilih Mata Pelajaran</option>
            @foreach ($mapel as $k)
            <option value="{{ $k->id }}" @if ($guru->mapel_id==$k->id) selected @endif>{{ $k->nama_mapel }}</option>
            @endforeach
        </select>
        <p class="text-danger">{{ $errors->first('mapel_id') }}</p>
    </div> --}}
    <div class="form-group">
        <button class="btn btn-success btn-sn">Ubah</button>
        <a class="btn btn-danger btn-sn" href="{{route ('guru.index')}}">Batal</a>
    </div>
    </form>

    @endsection