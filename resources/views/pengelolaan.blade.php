@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 fw-bold" style="color: #e75480;">Daftar Tugas Kuliahmu Ada Disini</h2>

    <div class="card shadow-sm p-4 mb-4">
        <div class="p-2 text-white fw-bold" style="background: linear-gradient(to right, #ff69b4, #87cefa); border-radius: 0.375rem;">
            Mata Kuliah PWEB
        </div>
        <p><strong>Deadline:</strong> 10 Mei 2025</p>
        <p><strong>Deskripsi:</strong> Buat web sederhana.</p>
    </div>

    <div class="card shadow-sm p-4 mb-4">
        <div class="p-2 text-white fw-bold" style="background: linear-gradient(to right, #ff69b4, #87cefa); border-radius: 0.375rem;">
            Mata Kuliah ADPL PPL
        </div>
        <p><strong>Deadline:</strong> 12 Mei 2025</p>
        <p><strong>Deskripsi:</strong> Buat usecase dan melanjutkan sprint berikutnya.</p>
    </div>

    <div class="card shadow-sm p-4 mb-4">
        <div class="p-2 text-white fw-bold" style="background: linear-gradient(to right, #ff69b4, #87cefa); border-radius: 0.375rem;">
            Mata Kuliah Sistem Operasi
        </div>
        <p><strong>Deadline:</strong> 20 Mei 2025</p>
        <p><strong>Deskripsi:</strong> Membuat navigasi dasar dan manajemen direktori.</p>
    </div>
</div>
@endsection
