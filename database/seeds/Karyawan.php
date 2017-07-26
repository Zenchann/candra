<?php

use Illuminate\Database\Seeder;

class Karyawan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = [
        	['nik'=>'42636738', 'nama'=>'Kiki Juhandi','tanggal_lahir'=>'1998/08/08','jk'=>'Laki-laki','alamat'=>'Jl.H.Sobarna','jabatan'=>'Cleaning Service','gapok'=>'2000000','bonus'=>'50000'],
        	['nik'=>'42636739', 'nama'=>'Kiki Junaidi','tanggal_lahir'=>'1998/08/08','jk'=>'Laki-laki','alamat'=>'Jl.H.Sobarna','jabatan'=>'OB','gapok'=>'2000000','bonus'=>'50000']
        ];
        DB::table('karyawan')->insert($a);	
    }
}
