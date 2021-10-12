<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class
        ]);
    }
}
