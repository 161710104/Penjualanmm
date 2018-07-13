<?php

use Illuminate\Database\Seeder;
use App\Merk;

class MerksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
     $t1 = new Merk();
        $t1->nama = "Toyota";
        $t1->save();

        $t2 = new Merk();
        $t2->nama = "Honda";
        $t2->save();

        $t3 = new Merk();
        $t3->nama = "Suzuki";
        $t3->save();

        $t4 = new Merk();
        $t4->nama = "Daihatsu";
        $t4->save();

        $t5 = new Merk();
        $t5->nama = "Mitsubishi";
        $t5->save();

         $t6 = new Merk();
        $t6->nama = "Nissan";
        $t6->save();

         $t7 = new Merk();
        $t7->nama = "Mazda";
        $t7->save();

         $t8 = new Merk();
        $t8->nama = "Mercedes-Benz";
        $t8->save();

         $t9 = new Merk();
        $t9->nama = "BMW";
        $t9->save();

         $t10 = new Merk();
        $t10->nama = "Hyundai";
        $t10->save();

    }
}
