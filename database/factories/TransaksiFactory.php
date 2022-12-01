<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = ["Menunggu","Diproses","Selesai"];
        $statusBayar = ["Lunas","Belum Lunas"];

        return [
            'user_id' => mt_rand(1,3),
            'jumlah_jaket' => mt_rand(1,2),
            'jumlah_selimut' => 1,
            'berat_baju' => mt_rand(1,3),
            'total_tarif' => mt_rand(7000,30000),
            'status_bayar' => $statusBayar[array_rand($statusBayar,1)],
            'status' => $status[array_rand($status,1)],
            'estimasi_selesai' => fake()->dateTime('now','Asia/Jakarta')
        ];
    }
}
