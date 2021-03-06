<?php

use Illuminate\Database\Seeder;

class TermSeeder extends Seeder{

      public function run()
      {
          $faker = Faker\Factory::create();
          $date = new \DateTime();
          foreach(config('constants.TERM') as $type){
                DB::table('terms')->insert([
                    'name' => $type,
                    'created_at' => $faker->date('Y-m-d h:i:s', 'now'),
                    'updated_at' => $faker->date('Y-m-d h:i:s', 'now')
                ]);
          }
      }
}
