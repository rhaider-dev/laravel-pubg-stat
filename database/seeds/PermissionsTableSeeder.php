<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-04-28 09:48:42',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-04-28 09:48:42',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-28 09:48:43',
                'updated_at' => '2020-04-28 09:48:43',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-28 09:48:48',
                'updated_at' => '2020-04-28 09:48:48',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-28 09:48:48',
                'updated_at' => '2020-04-28 09:48:48',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-28 09:48:48',
                'updated_at' => '2020-04-28 09:48:48',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-28 09:48:49',
                'updated_at' => '2020-04-28 09:48:49',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-28 09:48:49',
                'updated_at' => '2020-04-28 09:48:49',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-04-28 09:48:49',
                'updated_at' => '2020-04-28 09:48:49',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-04-28 09:48:49',
                'updated_at' => '2020-04-28 09:48:49',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-04-28 09:48:49',
                'updated_at' => '2020-04-28 09:48:49',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-04-28 09:48:49',
                'updated_at' => '2020-04-28 09:48:49',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-04-28 09:48:50',
                'updated_at' => '2020-04-28 09:48:50',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-28 09:48:50',
                'updated_at' => '2020-04-28 09:48:50',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-28 09:48:50',
                'updated_at' => '2020-04-28 09:48:50',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-28 09:48:50',
                'updated_at' => '2020-04-28 09:48:50',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-28 09:48:50',
                'updated_at' => '2020-04-28 09:48:50',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-28 09:48:50',
                'updated_at' => '2020-04-28 09:48:50',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-04-28 09:48:52',
                'updated_at' => '2020-04-28 09:48:52',
            ),
            41 => 
            array (
                'id' => 107,
                'key' => 'browse_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-07-20 15:07:15',
                'updated_at' => '2020-07-20 15:07:15',
            ),
            42 => 
            array (
                'id' => 108,
                'key' => 'read_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-07-20 15:07:15',
                'updated_at' => '2020-07-20 15:07:15',
            ),
            43 => 
            array (
                'id' => 109,
                'key' => 'edit_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-07-20 15:07:15',
                'updated_at' => '2020-07-20 15:07:15',
            ),
            44 => 
            array (
                'id' => 110,
                'key' => 'add_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-07-20 15:07:15',
                'updated_at' => '2020-07-20 15:07:15',
            ),
            45 => 
            array (
                'id' => 111,
                'key' => 'delete_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-07-20 15:07:15',
                'updated_at' => '2020-07-20 15:07:15',
            ),
            46 => 
            array (
                'id' => 112,
                'key' => 'browse_features',
                'table_name' => 'features',
                'created_at' => '2020-07-20 15:09:30',
                'updated_at' => '2020-07-20 15:09:30',
            ),
            47 => 
            array (
                'id' => 113,
                'key' => 'read_features',
                'table_name' => 'features',
                'created_at' => '2020-07-20 15:09:30',
                'updated_at' => '2020-07-20 15:09:30',
            ),
            48 => 
            array (
                'id' => 114,
                'key' => 'edit_features',
                'table_name' => 'features',
                'created_at' => '2020-07-20 15:09:30',
                'updated_at' => '2020-07-20 15:09:30',
            ),
            49 => 
            array (
                'id' => 115,
                'key' => 'add_features',
                'table_name' => 'features',
                'created_at' => '2020-07-20 15:09:30',
                'updated_at' => '2020-07-20 15:09:30',
            ),
            50 => 
            array (
                'id' => 116,
                'key' => 'delete_features',
                'table_name' => 'features',
                'created_at' => '2020-07-20 15:09:30',
                'updated_at' => '2020-07-20 15:09:30',
            ),
        ));
        
        
    }
}