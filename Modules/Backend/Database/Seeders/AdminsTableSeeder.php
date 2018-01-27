<?php
/**
 * Created by PhpStorm.
 * User: jccar
 * Date: 26/01/2018
 * Time: 20:04
 */

namespace Modules\Backend\Database\Seeders;

use Modules\Backend\Entities\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456')
        ]);
    }
}
