<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Produk;
use App\Http\Controllers\TransaksiController;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KasirTest extends TestCase
{
    use RefreshDatabase;

    // TEST 1: Uji Perhitungan Subtotal
    public function test_hitung_subtotal()
    {
        $kasir = new TransaksiController();

        // Cek Apakah 15.000 x 3 = 45.000
        $subtotal = $kasir->hitungSubtotal(15000, 3);
        $this->assertEquals(45000, $subtotal);
    }

    // TEST 2: Uji Pengurangan Stok
    public function test_kurangi_stok()
    {
        // 1. Buat data produk dummy (stok = 10)
        $produk = Produk::create([
            'nama_produk' => 'Buku',
            'harga'       => 5000,
            'stok'        => 10
        ]);

        // 2. Jalankan fungsi kurangiStok sebanyak 3
        $kasir = new TransaksiController();
        $kasir->kurangiStok($produk->id, 3);

        // 3. Cek Apakah stok tersisa 7
        $this->assertEquals(7, $produk->fresh()->stok);
    }
}
