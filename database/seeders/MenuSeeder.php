<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const MENU = 'menus';
    public function run()
    {
        DB::table(self::MENU)->insert([
            [
                "menu_name" => 'Dashboard',
                "menu_id" => "0",
                "type_id" => "3",
                "category_id" => "1",
                "status" => "1",
                "menu_link" => "/dashboard",
                "menu_class" => "fas fa-tachometer-alt"
            ]
        ]);
    }
}
