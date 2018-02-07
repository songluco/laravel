<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //删除表中所有数据，同时重置自增长ID
        //DB::table('users')->truncate();
        $this->call(UsersTableSeeder::class);
    }
}
