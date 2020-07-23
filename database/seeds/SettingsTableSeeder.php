<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'PUBGFinder',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'PUBGFinder',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'PUBG stat finder Script',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => NULL,
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 11,
                'key' => 'social.facebook',
                'display_name' => 'Facebook',
                'value' => 'facebook.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 6,
                'group' => 'Social',
            ),
            10 => 
            array (
                'id' => 13,
                'key' => 'social.youtube',
                'display_name' => 'Youtube',
                'value' => 'youtube.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 8,
                'group' => 'Social',
            ),
            11 => 
            array (
                'id' => 31,
                'key' => 'contact.email',
                'display_name' => 'Email',
                'value' => 'hello@company.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 26,
                'group' => 'Contact',
            ),
            12 => 
            array (
                'id' => 35,
                'key' => 'social.twitter',
                'display_name' => 'Twitter',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 30,
                'group' => 'Social',
            ),
            13 => 
            array (
                'id' => 36,
                'key' => 'social.linkedin',
                'display_name' => 'LinkedIn',
                'value' => 'linkedin.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 31,
                'group' => 'Social',
            ),
            14 => 
            array (
                'id' => 37,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => NULL,
                'details' => NULL,
                'type' => 'image',
                'order' => 32,
                'group' => 'Admin',
            ),
            15 => 
            array (
                'id' => 38,
                'key' => 'home.hero_title',
                'display_name' => 'Hero Title',
                'value' => 'Find PUBG player stats easily',
                'details' => NULL,
                'type' => 'text',
                'order' => 33,
                'group' => 'Home',
            ),
            16 => 
            array (
                'id' => 39,
                'key' => 'site.leaderboard_ad',
                'display_name' => 'Leaderboard Ad',
                'value' => '<a href="https://1.envato.market/c/2392729/448854/4415" id="448854"><img src="//a.impactradius-go.com/display-ad/4415-448854" border="0" alt="" width="1048" height="100"/></a><img height="0" width="0" src="//1.envato.market/i/2392729/448854/4415" style="position:absolute;visibility:hidden;" border="0" />',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 34,
                'group' => 'Site',
            ),
        ));
        
        
    }
}