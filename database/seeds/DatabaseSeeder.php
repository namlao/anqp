<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        DB::statement('PRAGMA foreign_keys = OFF;');

        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);

        DB::statement('PRAGMA foreign_keys = ON;');
        Model::reguard();
    }
}
