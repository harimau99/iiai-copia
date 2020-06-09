<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => "ain-auditor",
            'email'    => 'ain.azman2008@gmail.com',
            'password' => bcrypt('00PMsigm@'),
            'role'     => 'master',
            'active'   => 1,
            'verified' => 1,
        ]);
        /**
         * admin is equal to user audit account
         * accountant is an account
         * librarian is a librarian user account
         * teacher is equal to lecturer user account
         * student is student user account
         */
        factory(User::class, 10)->states('admin')->create();
        factory(User::class, 10)->states('accountant')->create();
        factory(User::class, 10)->states('librarian')->create();
        factory(User::class, 30)->states('teacher')->create();
        factory(User::class, 200)->states('student')->create();
    }
}
