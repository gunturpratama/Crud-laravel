<?php

use Illuminate\Database\Seeder;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
			DB::table('barang')->insert([
            'nama_barang'      => 'Samsung j2 prime',
            'kategori'       => 'elektronik',
            'desc'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta dolorum eum et inventore adipisci blanditiis iure in eligendi, quo at dolores repudiandae porro neque provident cumque, iusto molestias a veritatis.',
            'supplier'    => 'Samsung',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
