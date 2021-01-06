<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'email' => 'blana@lapulapucity.gov.ph',
                'first_name' => 'Brisco',
                'last_name' => 'Lana',
                'middle_name' => 'Arcipe',
                'office' => 'IT Main',
                'user_type' => 'super_admin',
                'password' => Hash::make('d4rkl0z3r')
            ]
        );
        // $this->call(UsersTableSeeder::class);
    }
}
