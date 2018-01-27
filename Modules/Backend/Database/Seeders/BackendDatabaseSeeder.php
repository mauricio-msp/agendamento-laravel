<?php

namespace Modules\Backend\Database\Seeders;

use Illuminate\Database\Seeder;

class BackendDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(AdminsTableSeeder::class);
    }
}
