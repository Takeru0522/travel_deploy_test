<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wants = [
            ['spot_id' => '1',
            'user_id' => '1'],
            ['spot_id' => '2',
            'user_id' => '2']
        ];
        foreach ($wants as $want) {
            DB::table('spot_want_to')->insert([
                'spot_id' => $want['spot_id'],
                'user_id' => $want['user_id'],
            ]);
        }
    }
}
