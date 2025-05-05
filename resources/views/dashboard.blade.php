@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
  <h2 class="mb-4 fw-bold" style="color: #e75480;">Selamat Datang, <strong>{{ $username }}</strong>! 🎓</h2>
  <p class="mt-3">Ini adalah sistem pengelolaan tugas kuliahmu.</p>
  <p class="mb-0">Silakan lihat daftar tugasmu di menu <strong>Pengelolaan</strong>!</p>
</div>
@endsection
