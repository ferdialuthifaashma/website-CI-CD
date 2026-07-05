@extends('layouts.app')

@section('content')
<div class="bg-white p-4 rounded shadow-sm">
    <div class="mb-4">
        <h2 class="fw-bold text-danger">Daftar Tugas Aktif</h2>
        <p class="text-muted">Halaman ini digunakan untuk memvalidasi fungsi testing pada CI Pipeline.</p>
    </div>

    <div class="list-group">
        <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1 fw-bold">Membuat Pipeline GitHub Actions</h5>
                <small class="text-muted">Mata Kuliah: Pengujian Perangkat Lunak</small>
            </div>
            <span class="badge bg-danger rounded-pill">Penting</span>
        </div>
        
        <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1 fw-bold">Review Jurnal Arsitektur Software</h5>
                <small class="text-muted">Mata Kuliah: Arsitektur Enterprise</small>
            </div>
            <span class="badge bg-warning text-dark rounded-pill">Minggu Depan</span>
        </div>
    </div>
</div>
@endsection