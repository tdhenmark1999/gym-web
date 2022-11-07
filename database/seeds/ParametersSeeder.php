<?php

use App\Laravel\Models\Parameters;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ParametersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $parameter = Parameters::firstOrNew([
        //     'title' => 'volleyball', 
        //     'value' => "6341075369799105", 
        //     'category' => "sports", 
            
        // ]);

        // $parameter->save();

        // $parameter = Parameters::firstOrNew([
        //     'title' => 'basketball', 
        //     'value' => "4894709357018495", 
        //     'category' => "sports", 
            
        // ]);

        // $parameter->save();

        // $parameter = Parameters::firstOrNew([
        //     'title' => 'SSS', 
        //     'value' => "6619438744357052", 
        //     'category' => "primary_id", 
            
        // ]);

        // $parameter->save();

        // $parameter = Parameters::firstOrNew([
        //     'title' => 'Phil Health', 
        //     'value' => "2724652892478640", 
        //     'category' => "secondary_id", 
            
        // ]);

        // $parameter->save();

        DB::table('parameters')->insert([

            [
                'title' => 'Phil Health',
                'value' => '2724652892478640',
                'category' => 'secondary_id',
             
            ],
            [
                'title' => 'SSS',
                'value' => '6619438744357052',
                'category' => 'primary_id',
             
            ],
            [
                'title' => 'basketball',
                'value' => '4894709357018495',
                'category' => 'sports',
             
            ],
            [
                'title' => 'volleyball',
                'value' => '6341075369799105',
                'category' => 'sports',
             
            ],

        ]);

       
    }
}
