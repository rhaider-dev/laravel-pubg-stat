<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-04-28 09:48:42',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-06-20 15:38:37',
                'route' => 'voyager.media.index',
                'parameters' => 'null',
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-04-28 09:48:42',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-04-28 09:48:42',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-07-20 15:44:09',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-05-03 15:34:55',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-05-03 15:34:55',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-05-03 15:34:55',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-05-03 15:34:55',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2020-04-28 09:48:42',
                'updated_at' => '2020-07-20 15:44:06',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2020-04-28 09:48:48',
                'updated_at' => '2020-07-20 15:44:05',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2020-04-28 09:48:49',
                'updated_at' => '2020-07-20 15:44:05',
                'route' => 'voyager.posts.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Pages',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2020-04-28 09:48:50',
                'updated_at' => '2020-07-20 15:44:05',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2020-04-28 09:48:52',
                'updated_at' => '2020-05-03 15:34:55',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 18,
                'menu_id' => 2,
                'title' => 'Home',
                'url' => '/',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-05-01 11:27:01',
                'updated_at' => '2020-05-01 11:31:42',
                'route' => NULL,
                'parameters' => '',
            ),
            15 => 
            array (
                'id' => 19,
                'menu_id' => 2,
                'title' => 'News',
                'url' => '/posts',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2020-05-01 11:28:27',
                'updated_at' => '2020-06-18 15:33:34',
                'route' => NULL,
                'parameters' => '',
            ),
            16 => 
            array (
                'id' => 22,
                'menu_id' => 2,
                'title' => 'Contact',
                'url' => '/contact',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2020-05-02 11:26:09',
                'updated_at' => '2020-06-18 15:33:34',
                'route' => NULL,
                'parameters' => '',
            ),
            17 => 
            array (
                'id' => 23,
                'menu_id' => 3,
                'title' => 'Privacy Policy',
                'url' => '/page/privacy-policy',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-05-03 10:44:22',
                'updated_at' => '2020-06-20 16:00:25',
                'route' => NULL,
                'parameters' => '',
            ),
            18 => 
            array (
                'id' => 24,
                'menu_id' => 3,
                'title' => 'Terms & Condition',
                'url' => '/page/terms-condition',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-05-03 10:45:11',
                'updated_at' => '2020-06-20 16:00:25',
                'route' => NULL,
                'parameters' => '',
            ),
            19 => 
            array (
                'id' => 25,
                'menu_id' => 3,
                'title' => 'Contact',
                'url' => '/contact',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-05-03 10:47:16',
                'updated_at' => '2020-06-20 16:00:25',
                'route' => NULL,
                'parameters' => '',
            ),
            20 => 
            array (
                'id' => 39,
                'menu_id' => 3,
                'title' => 'Terms of Service',
                'url' => '#',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-06-20 16:00:21',
                'updated_at' => '2020-06-20 16:00:25',
                'route' => NULL,
                'parameters' => '',
            ),
            21 => 
            array (
                'id' => 40,
                'menu_id' => 1,
                'title' => 'Faqs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2020-07-20 15:07:16',
                'updated_at' => '2020-07-20 15:44:09',
                'route' => 'voyager.faqs.index',
                'parameters' => NULL,
            ),
            22 => 
            array (
                'id' => 41,
                'menu_id' => 1,
                'title' => 'Features',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-receipt',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2020-07-20 15:09:30',
                'updated_at' => '2020-07-20 15:44:09',
                'route' => 'voyager.features.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}