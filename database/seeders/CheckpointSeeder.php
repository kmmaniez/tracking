<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CheckpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::beginTransaction();
        // try {
            DB::table('checkpoints')->insert([
                'id_cp' => 'C01',
                'kota_tujuan' => 'JAKARTA',
                'cp1' => 'SBY',
                'cp2' => 'MALANG',
                'cp3' => 'JKT',
            ]);
            DB::table('checkpoints')->insert([
                'id_cp' => 'C02',
                'kota_tujuan' => 'BANDUNG',
                'cp1' => 'SBY',
                'cp2' => 'JKT',
                'cp3' => 'BANDUNG',
            ]);
            DB::table('checkpoints')->insert([
                'id_cp' => 'C03',
                'kota_tujuan' => 'KALIMANTAN',
                'cp1' => 'SBY',
                'cp2' => 'PELABUHAN SBY',
                'cp3' => 'KALIMANTAN',
            ]);
            DB::table('checkpoints')->insert([
                'id_cp' => 'C04',
                'kota_tujuan' => 'BALI',
                'cp1' => 'SBY',
                'cp2' => 'PROBOLINGGO',
                'cp3' => 'BALI',
            ]);
            DB::table('checkpoints')->insert([
                'id_cp' => 'C05',
                'kota_tujuan' => 'MALANG',
                'cp1' => 'SBY',
                'cp2' => 'SDA',
                'cp3' => 'MALANG',
            ]);
            DB::table('checkpoints')->insert([
                'id_cp' => 'C06',
                'kota_tujuan' => 'JEMBER',
                'cp1' => 'SBY',
                'cp2' => 'MALANG',
                'cp3' => 'JEMBER',
            ]);

        //     DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        // }
    }
        
}
