<?php

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder seeds the data (fixtures)
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DisciplinesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
