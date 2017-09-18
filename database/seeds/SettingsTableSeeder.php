<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'name' => 'table',
                'default_value' => config('settings.table'),
                'current_value' => config('settings.table'),
                'created_at' => time(),
                'updated_at' => time()
            ],
            [
                'name' => 'database',
                'default_value' => config('database.connections.pgsql.database'),
                'current_value' => config('database.connections.pgsql.database'),
                'created_at' => time(),
                'updated_at' => time()
            ],
            [
                'name' => 'host',
                'default_value' => config('database.connections.pgsql.host'),
                'current_value' => config('database.connections.pgsql.host'),
                'created_at' => time(),
                'updated_at' => time()
            ],
            [
                'name' => 'port',
                'default_value' => config('database.connections.pgsql.port'),
                'current_value' => config('database.connections.pgsql.port'),
                'created_at' => time(),
                'updated_at' => time()
            ],
            [
                'name' => 'username',
                'default_value' => config('database.connections.pgsql.username'),
                'current_value' => config('database.connections.pgsql.username'),
                'created_at' => time(),
                'updated_at' => time()
            ],
            [
                'name' => 'password',
                'default_value' => config('database.connections.pgsql.password'),
                'current_value' => config('database.connections.pgsql.password'),
                'created_at' => time(),
                'updated_at' => time()
            ],
            [
                'name' => 'display',
                'default_value' => '20',
                'current_value' => '20',
                'created_at' => time(),
                'updated_at' => time()
            ]
        ]);
    }
}
