@extends('template')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update', $siswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" value="{{ $siswa->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input type="text" class="form-control" id="nis" value="{{ $siswa->nis }}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="" disabled selected>Jenis Kelamin</option>
                                        <option value="laki-laki" {{ $siswa->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki - laki</option>
                                        <option value="perempuan" {{ $siswa->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" value="{{ $siswa->alamat }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" value="{{ $siswa->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="kelas_id">Kelas </label>
                                    <select class="form-control" name="kelas_id">
                                        <option value="">Nama Kelas</option>
                                        @foreach ($kelas as $k)
                                        <option value="{{ $k->id }}" {{ $siswa->kelas_id == $k->id ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                    <p class="text-danger">{{ $errors->first('kelas_id') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan_id">Jurusan </label>
                                    <select class="form-control" name="jurusan_id">
                                        <option value="">Nama Jurusan</option>
                                        @foreach ($jurusan as $k)
                                        <option value="{{ $k->id }}" {{ $siswa->jurusan_id == $k->id ? 'selected' : '' }}>{{ $k->nama_jurusan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection