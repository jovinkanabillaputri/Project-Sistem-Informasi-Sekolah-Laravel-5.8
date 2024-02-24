<ul class="nav">

  @auth
  @if(auth()->user()->role == 'admin')
  <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
    <a href="{{ url ('dashboard')}}">
      <i class="nc-icon nc-bank"></i>
      <p>Dashboard</p>
    </a>
  </li>
  <li class="{{ Request::is('profile') ? 'active' : '' }}">
    <a href="{{ url ('profile')}}">
      <i class="nc-icon nc-single-02"></i>
      <p>Profil Pengguna</p>
    </a>
  </li>

  <li class=" {{ Request::is('siswa') ? 'active' : '' }}">
    <a href="{{ url ('siswa')}}">
      <i class="nc-icon nc-badge"></i>
      <p>Data Siswa</p>
    </a>
  </li>
  <li class=" {{ Request::is('guru') ? 'active' : '' }}">
    <a href="{{ url ('guru')}}">
      <i class="nc-icon nc-circle-10"></i>
      <p>Data Guru</p>
    </a>
  </li>
  <li class=" {{ Request::is('jurusan') ? 'active' : '' }}">
    <a href="{{ url ('jurusan')}}">
      <i class="nc-icon nc-briefcase-24"></i>
      <p>Data Jurusan</p>
    </a>
  </li>
  <li class=" {{ Request::is('mapel') ? 'active' : '' }}">
    <a href="{{ url ('mapel')}}">
      <i class="nc-icon nc-tile-56"></i>
      <p>Data Mata pelajaran</p>
    </a>
  </li>
  <li class=" {{ Request::is('kelas') ? 'active' : '' }}">
    <a href="{{ url ('kelas')}}">
      <i class="nc-icon nc-layout-11"></i>
      <p>Data Kelas</p>
    </a>
  </li>
  @else
  <li class=" {{ Request::is('dashboard') ? 'active' : '' }}">
    <a href="{{ url ('dashboard')}}">
      <i class="nc-icon nc-bank"></i>
      <p>Dashboard</p>
    </a>
  </li>
  <li class=" {{ Request::is('profile') ? 'active' : '' }}">
    <a href="{{ url ('profile')}}">
      <i class="nc-icon nc-single-02"></i>
      <p>Profil Pengguna</p>
    </a>
  </li>
  @endif
  @endauth

</ul>