<?php

use App\Repositories\Eloquent\DisciplineRepository;
use Illuminate\Database\Seeder;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param DisciplineRepository $disciplineRepository
     * @return void
     */
    public function run(DisciplineRepository $disciplineRepository)
    {
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            $disciplineRepository->create(['name' => $faker->sentence]);
        }
    }
}
