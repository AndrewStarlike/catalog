<?php

use App\Repositories\Eloquent\UserRepository;
use Illuminate\Database\Seeder;

/**
 * Class UsersTableSeeder fixture
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param UserRepository $userRepository
     * @return void
     */
    public function run(UserRepository $userRepository)
    {
        $password = Hash::make('cacatel');
        $time = date("Ymdhis");
        for($i = 0; $i < 50; $i++) {
            $userRepository->create([
                'name' => "Administrator{$i}",
                'email' => "admin{$time}{$i}@test.com",
                'password' => $password,
            ]);
        }
    }
}

/**
 * Cookie time :)
 * The stupidest code i could think of right now
 *         for($i = 0; $i < 50; ++$i) {
 *
 * }
 */