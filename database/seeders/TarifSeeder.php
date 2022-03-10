<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarif;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Tarif::create([
            "daya" => "500",
            "tarifperkwh" => "300"
        ]);
        $data2 = Tarif::create([
            "daya" => "600",
            "tarifperkwh" => "200"
        ]);
        $data3 = Tarif::create([
            "daya" => "1300",
            "tarifperkwh" => "1445"
        ]);
    }
}
