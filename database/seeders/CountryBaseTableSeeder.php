<?php

namespace Database\Seeders;

use Illuminate\Console\Command;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PragmaRX\Countries\Package\Countries;

class CountryBaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            try {
                $countries = Countries::all();

                foreach ($countries as $country) {
                    $this->command->info('insert --> : '. json_encode($country->name->common));
                    $countryData = [
                        'name_fr' => $country->demonyms->fra->f,
                        'name_en' => $country->demonyms->eng->f,
                        'flag_url' => $country->flag->svg,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];

                    $countryId = DB::table('countries')->insertGetId($countryData);
                    $this->command->info('added : --> ' .json_encode($countryData['name_fr']));

                    foreach ($country->hydrate('cities')->cities as $city) {

                        $this->command->info('insert city');
                        $cityData = [
                            'name_fr' => $city['name_fr'],
                            'name_en' => $city['name_en'],
                            'country_id' => $countryId,
                            'created_at' => now(),
                            'updated_at' => now()
                        ];

                        DB::table('cities')->insert($cityData);

                        $this->command->info('added city');
                    }
                }

                $this->command->info('successfully!');
            } catch (\Exception $exception) {
                $this->command->error('ERROR: '.json_encode($exception->getMessage()));
            }
        });
    }
}
