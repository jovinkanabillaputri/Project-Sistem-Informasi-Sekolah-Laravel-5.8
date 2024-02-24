@extends('template')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="../assets/img/damir-bosnjak.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        @foreach ($siswa as $sis)
                        <a href="#">
                            @if (auth()->user()->foto)
                            <img src="{{ asset('images/' . auth()->user()->foto) }}" alt="Profile" class="avatar border-gray" width="100px"> </br>
                            @else
                            <img src="{{ asset('images/profil.png') }}" alt="Profile" class="rounded-circle" width="150px"> </br>
                            @endif
                            <h5 class="title">{{ $sis->nama ?? "-"}}</h5>
                        </a>


                        <a href="/profile2">Kelas {{ $sis->kelas->nama_kelas ?? "-"}}</a>
                        <p class="description">
                            {{ $sis->email ?? "-"}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Profile</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 label ">Nama</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-7 col-md-7">{{ $sis->nama ?? "-"}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 label ">NIS</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-7 col-md-7">{{ $sis->nis ?? "-"}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 label ">Jenis Kelamin</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-7 col-md-7">{{ $sis->jenis_kelamin ?? "-"}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 label ">Alamat</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-7 col-md-7">{{ $sis->alamat ?? "-"}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 label ">Email</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-7 col-md-7">{{ $sis->email ?? "-"}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 label ">Kelas</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-7 col-md-7">{{ $sis->kelas->nama_kelas ?? "-"}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 label ">Jurusan</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-7 col-md-7">{{ $sis->jurusan -> nama_jurusan ?? "-"}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 label "></div>
                        <div class="col-lg-1 col-md-1 label "></div>
                        <div class="col-lg-7 col-md-7">
                            <div class="text-right">
                                <a href="{{ route('profile.edit', $sis->id) }}" class="btn btn-primary btn-round">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection