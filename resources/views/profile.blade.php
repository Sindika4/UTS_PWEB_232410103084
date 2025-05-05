@extends('layouts.app')

@section('content')
<h2 class="mb-4 fw-bold" style="color: #e75480;">Profil</h2>

<div class="card shadow-sm p-4">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Username:</strong> {{ $username }}</li>
    <li class="list-group-item"><strong>NIM:</strong> 232410103084</li>
    <li class="list-group-item"><strong>Status:</strong> Mahasiswa aktif</li>
    <li class="list-group-item"><strong>Angkatan:</strong> 2023</li>
    <li class="list-group-item"><strong>Program Studi:</strong> Informatika</li>
  </ul>
</div>
@endsection
