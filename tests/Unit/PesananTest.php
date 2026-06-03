<?php

namespace Tests\Unit;

use App\Models\Pesanan;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class PesananTest extends TestCase
{
    public function test_model_pesanan_menerima_data_yang_diizinkan()
    {
        $pesanan = new Pesanan([
            'code_pemesanan' => 'PSN-001',
            'nama' => 'Pelanggan Contoh',
            'tanggal' => '2026-06-03',
            'produk' => 'Produk UMKM',
            'harga' => 50000,
            'status' => 'Menunggu Pembayaran',
            'bukti_pembayaran' => 'bukti.jpg',
        ]);

        $this->assertEquals('PSN-001', $pesanan->code_pemesanan);
        $this->assertEquals('Pelanggan Contoh', $pesanan->nama);
        $this->assertEquals('Produk UMKM', $pesanan->produk);
        $this->assertEquals(50000, $pesanan->harga);
        $this->assertEquals('Menunggu Pembayaran', $pesanan->status);
    }

    public function test_model_pesanan_memiliki_fillable_yang_sesuai()
    {
        $pesanan = new Pesanan();

        $this->assertEquals([
            'code_pemesanan',
            'nama',
            'tanggal',
            'produk',
            'harga',
            'status',
            'bukti_pembayaran',
        ], $pesanan->getFillable());
    }

    public function test_tanggal_pesanan_diubah_menjadi_objek_tanggal()
    {
        $pesanan = new Pesanan([
            'tanggal' => '2026-06-03',
        ]);

        $this->assertInstanceOf(Carbon::class, $pesanan->tanggal);
    }
}
