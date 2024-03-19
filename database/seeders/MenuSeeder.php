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
            ],
            [
                "menu_name" => 'Menu',
                "menu_id" => "0",
                "type_id" => "3",
                "category_id" => "1",
                "status" => "1",
                "menu_link" => "/menu",
                "menu_class" => "fas fa-tachometer-alt"
            ],
            [
                "menu_name" => 'Menu List',
                "menu_id" => "2",
                "type_id" => "3",
                "category_id" => "1",
                "status" => "1",
                "menu_link" => "/menu",
                "menu_class" => "fas fa-tachometer-alt"
            ],
            [
                "menu_name" => 'Menu Add',
                "menu_id" => "2",
                "type_id" => "3",
                "category_id" => "1",
                "status" => "1",
                "menu_link" => "/addmenu",
                "menu_class" => "fas fa-tachometer-alt"
            ],
            [
                "menu_name" => 'Manage Pages',
                "menu_id" => "0",
                "type_id" => "3",
                "category_id" => "1",
                "status" => "1",
                "menu_link" => "/pages",
                "menu_class" => "fas fa-tachometer-alt"
            ],
            [
                "menu_name" => 'Pages & Folder',
                "menu_id" => "5",
                "type_id" => "3",
                "category_id" => "1",
                "status" => "1",
                "menu_link" => "/pages",
                "menu_class" => "fas fa-tachometer-alt"
            ],
            [
                "menu_name" => 'Category',
                "menu_id" => "0",
                "type_id" => "3",
                "category_id" => "1",
                "status" => "1",
                "menu_link" => "/category",
                "menu_class" => "fas fa-tachometer-alt"
            ],
            [
                "menu_name" => 'Category List',
                "menu_id" => "7",
                "type_id" => "3",
                "category_id" => "1",
                "status" => "1",
                "menu_link" => "/categories",
                "menu_class" => "fas fa-tachometer-alt"
            ],
            [
                "menu_name" => 'Add Category',
                "menu_id" => "7",
                "type_id" => "3",
                "category_id" => "1",
                "status" => "1",
                "menu_link" => "/categories/add",
                "menu_class" => "fas fa-tachometer-alt"
            ]
        ]);
    }
}
