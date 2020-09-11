<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i<=5; $i++) {
            DB::table('Users')->insert([
                'name' => 'sample0' .$i,
                'email' => 'sample0' .$i. '@sample.com',
                'password' => bcrypt('byjsx117'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
