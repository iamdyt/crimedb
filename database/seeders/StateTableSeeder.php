<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_handle = fopen(base_path('tempfile/naija_state_capital.csv'), 'r');
        while(!feof($file_handle)){
            $data = fgetcsv($file_handle);
            State::create([
                'name' => $data[0],
                'capital' => $data[1]
                ]);
        }
        fclose($file_handle);
    }
}
