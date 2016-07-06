<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voi
     */
    public function run()
    {
        $faker = faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'email' => $faker->safeEmail,
                'name' => $faker->name,
                'password' => bcrypt(str_random(6)),
                'remember_token' => str_random(16),
            ]);
        }

    }
}
