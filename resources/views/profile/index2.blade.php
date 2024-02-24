@extends('template')
@section('content')
<div class="content">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title"> Data Kelas Saya</h4>
                        <a href="{{ route('profile.index') }}"> <button class="btn btn-primary btn-sm">Kembali</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                
                                <thead class=" text-black">
                                    <tr>
                                        <th>ID</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($siswa as $i => $v)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$v->nis}}</td>
                                        <td>{{$v->nama}}</td>
                                        <td>{{$v->jenis_kelamin}}</td>
                                        <td>{{$v->email}}</td>
                                        <td>{{$v->alamat}}</td>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @endsection