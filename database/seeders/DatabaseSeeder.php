<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Driver;
use App\Models\Pemesan;
use App\Models\Kendaraan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        DB::table('user')->delete();

        $user = [
            ['id' => 1, 'name' => 'Admin', 'username' => 'admin', 'level' => 'admin', 'password' => bcrypt('admin')],
            ['id' => 2, 'name' => 'Petugas', 'username' => 'petugas', 'level' => 'petugas', 'password' => bcrypt('petugas')],
            ['id' => 3, 'name' => 'Staff Akomodasi', 'username' => 'staffakomodasi', 'level' => 'akomodasi', 'password' => bcrypt('staffakomodasi')],
        ];

        User::insert($user);
        
        DB::table('driver')->delete();

        $driver = [
            ['id' => 1, 'name' => 'suparyono', 'nohp' => '08123456789', 'alamat' => 'Pouros Lane'],
            ['id' => 2, 'name' => 'Kelvin Mayert', 'nohp' => '989-642-4898', 'alamat' => '7858 Sandra Prairie'],
            ['id' => 3, 'name' => 'Henry Satterfield', 'nohp' => '(808) 760-1971 x583', 'alamat' => '068 Laurence Green'],
            ['id' => 4, 'name' => 'Dr. Noel Lehner', 'nohp' => '(493) 287-3359', 'alamat' => '91495 Maggio Parkway'],
            ['id' => 5, 'name' => 'Dr. Clyde Aufderhar', 'nohp' => '(227) 661-8905', 'alamat' => '2017 Pasquale Ville'],
        ];

        Driver::insert($driver);
        
        DB::table('kendaraan')->delete();
        $kendaraan = [
            ['id' => 1, 'jenis' => 'Truk', 'merk' => 'Hino', 'type' => 'Hino 300 S', 'bbm' => 'Solar',],
            ['id' => 2, 'jenis' => 'Motor', 'merk' => 'Ninja', 'type' => 'ZX', 'bbm' => 'Pertamax'],
            ['id' => 3, 'jenis' => 'Bis', 'merk' => 'Mercedes-Benz', 'type' => 'OC 500 RF 2542', 'bbm' => 'Solar'],
            ['id' => 4, 'jenis' => 'Mobil', 'merk' => 'BMW', 'type' => 'E36', 'bbm' => 'Pertamax'],            
            ['id' => 5, 'jenis' => 'Kapal', 'merk' => 'Evergreen', 'type' => 'H3RC', 'bbm' => 'MFO'],            
            
        ];

        Kendaraan::insert($kendaraan);

        DB::table('pemesan')->delete();
        $pemesan = [
            ['id' => 1, 'name' => 'Peggy Terry', 'alamat' => '93861 Leffler Court', 'tanggal_butuh'=> '2023-03-30', 'kebutuhan'=>'Mengangkut Pasir 13 Ton'],
            ['id' => 2, 'name' => 'Justin Swaniawski', 'alamat' => '993 Felicita Stravenue', 'tanggal_butuh'=> '2023-04-30', 'kebutuhan'=>'Pengangkutan Kontainer'],
            ['id' => 3, 'name' => 'Alex Sporer DDS', 'alamat' => '488 Schaefer Centers', 'tanggal_butuh'=> '2023-12-10', 'kebutuhan'=>'Mengirim barang antar provinsi'],
            ['id' => 4, 'name' => 'Lucy Hane', 'alamat' => 'Stoltenberg Points', 'tanggal_butuh'=> '2024-04-15', 'kebutuhan'=>'Berangkat Survei tempat'],
            ['id' => 5, 'name' => 'Marilyn Schowalter', 'alamat' => '830 Schoen Isle', 'tanggal_butuh'=> '2023-10-21', 'kebutuhan'=>'Pengawasan Area'],
        ];
        Pemesan::insert($pemesan);
    }
}
