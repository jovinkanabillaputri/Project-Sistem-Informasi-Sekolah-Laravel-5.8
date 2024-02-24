
@extends('template')
@section('content')
<div class="content">
        <div class="card">
            <div class="card-header">
<form action="{{ route('siswa.store') }}" method="post">
    {{ csrf_field() }}
<div class="form-group">
    <label for="nis">NIS</label>
    <input type="decimal" name="nis" class="form-control" required>
    <p class="text-danger">{{ $errors->first('nis') }}</p>
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
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" required>
    <p class="text-danger">{{ $errors->first('email') }}</p>
</div>
<div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control" required>
    </textarea>
    <p class="text-danger">{{ $errors->first('alamat') }}</p>
</div>
<div class="form-group">
    <label for="kelas_id">Kelas</label>
    <select class="form-control" name="kelas_id">
        <option value="">Pilih Kelas</option>
        @foreach ($kelas as $k)
            <option value="{{ $k->id }}">{{ $k->nama_kelas}}</option>
        @endforeach
    </select>
    <p class="text-danger">{{ $errors->first('kelas_id') }}</p>
</div>
<div class="form-group">
    <label for="jurusan_id">Jurusan</label>
    <select class="form-control" name="jurusan_id">
        <option value="">Pilih Jurusan</option>
        @foreach ($jurusan as $k)
            <option value="{{ $k->id }}">{{ $k->nama_jurusan}}</option>
        @endforeach
    </select>
    <p class="text-danger">{{ $errors->first('jurusan_id') }}</p>
</div>
<div class="form-group">
    <button class="btn btn-success btn-sn">Simpan</button>
    <a class="btn btn-danger btn-sn" href="{{route ('siswa.index')}}">Batal</a>
</div>
</form>

@endsection