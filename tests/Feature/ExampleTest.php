<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test apakah halaman jadwal kuliah bisa dibuka.
     */
    public function test_halaman_jadwal_bisa_diakses(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200); // Harus berstatus OK (200)
        $response->assertSee('Jadwal Perkuliahan'); // Harus ada teks ini di web
    }

    /**
     * Test apakah halaman tugas bisa dibuka.
     */
    public function test_halaman_tugas_bisa_diakses(): void
    {
        $response = $this->get('/tugas');

        $response->assertStatus(200); // Harus berstatus OK (200)
        $response->assertSee('Daftar Tugas Aktif'); // Harus ada teks ini di web
    }
}