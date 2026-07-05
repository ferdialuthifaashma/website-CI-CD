@extends('layouts.app')

@section('content')
<div class="bg-white p-4 rounded shadow-sm">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">Jadwal Perkuliahan</h2>
        <p class="text-muted">Simulasi data statis untuk kebutuhan pengujian automasi deployment.</p>
    </div>

    <table class="table table-striped table-bordered align-middle">
        <thead class="table-primary text-center">
            <tr>
                <th>Hari</th>
                <th>Mata Kuliah</th>
                <th>Waktu</th>
                <th>Ruangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center fw-bold">Senin</td>
                <td>Rekayasa Perangkat Lunak</td>
                <td class="text-center">08:00 - 10:30</td>
                <td class="text-center">Lab Komputer 2</td>
            </tr>
            <tr>
                <td class="text-center fw-bold">Rabu</td>
                <td>Pengujian & Pemeliharaan Perangkat Lunak</td>
                <td class="text-center">11:00 - 13:30</td>
                <td class="text-center">Ruang Teori 4.1</td>
            </tr>
            <tr>
                <td class="text-center fw-bold">Kamis</td>
                <td>Arsitektur Enterprise</td>
                <td class="text-center">14:00 - 16:30</td>
                <td class="text-center">Ruang Teori 2.3</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection