
@extends('template')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
<form action="{{ route('guru.store') }}" method="post">
    {{ csrf_field() }}
<div class="form-group">
    <label for="nip">NIP</label>
    <input type="decimal" name="nip" class="form-control" required>
    <p class="text-danger">{{ $errors->first('nip') }}</p>
</div>
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" required>
    <p class="text-danger">{{ $errors->first('nama') }}</p>
</div>
<div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" value="laki-laki"
    class="form-control" required>Laki-laki
    <input type="radio" name="jenis_kelamin" value="perempuan"
    class="form-control" required>Perempuan
    <p class="text-danger">{{ $errors->first('jenis_kelamin') }}</p>
</div>
<div class="form-group">
    <label for="no_hp">No Handphone</label>
    <input type="decimal" name="no_hp" class="form-control" required>
    <p class="text-danger">{{ $errors->first('no_hp') }}</p>
</div>
<div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control" required>
    </textarea>
    <p class="text-danger">{{ $errors->first('alamat') }}</p>
</div>
{{-- <div class="form-group">
    <label for="mapel_id">Mata Pelajaran</label>
    <select class="form-control" name="mapel_id">
        <option value="">Pilih Mata Pelajaran</option>
        @foreach ($mapel as $k)
            <option value="{{ $k->id }}">{{ $k->nama_mapel }}</option>
        @endforeach
    </select>
    <p class="text-danger">{{ $errors->first('mapel_id') }}</p>
</div> --}}
<div class="form-group">
    <button class="btn btn-success btn-sn">Simpan</button>
    <a class="btn btn-danger btn-sn" href="{{route ('guru.index')}}">Batal</a>
</div>
</form>

@endsection