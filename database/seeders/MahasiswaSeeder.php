<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Anggota();
        $mhs1->anggota_nama = "Arif";
        $mhs1->anggota_alamat ="Sidoarjo";
        $mhs1->anggota_jk ="L";
        $mhs1->anggota_telp="11111";
        $mhs1->save();

        $mhs2 = new Anggota();
        $mhs2->anggota_nama = "Ade";
        $mhs2->anggota_alamat ="Surabaya";
        $mhs2->anggota_jk ="L";
        $mhs2->anggota_telp="22222";
        $mhs2->save();

        $mhs3 = new Anggota();
        $mhs3->anggota_nama = "Zam";
        $mhs3->anggota_alamat ="Kalimantan";
        $mhs3->anggota_jk ="L";
        $mhs3->anggota_telp="33333";
        $mhs3->save();


    }
}
