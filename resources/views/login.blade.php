@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow-sm p-4">
      <h2 class="mb-4 fw-bold" style="color: #e75480;">Login Dulu Gais 😄</h2>
      <form method="POST" action="/login">
        @csrf
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn w-100 text-white fw-bold" style="background: linear-gradient(to right, #ff69b4, #87cefa); border: none;">
                Masuk
            </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
