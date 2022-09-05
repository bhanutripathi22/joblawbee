<?php

use Illuminate\Database\Seeder;

class PracticeAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('practice_areas')->insert(array(
            array(
                'name' => 'Admiralty, Shipping and Maritime',
                'slug' => str_slug('Admiralty, Shipping and Maritime'),
                
            ),
            array(
                'name' => 'Arbitration / Alternate Dispute Resolution',
                'slug' => str_slug('Arbitration / Alternate Dispute Resolution'),
                
            ),
            array(
                'name' => 'Banking, Finance and Capital Market',
                'slug' => str_slug('Banking, Finance and Capital Market'),
                
            ),
           
            array(
                'name' => 'Corporate, Commercial and Contacts',
                'slug' => str_slug('Corporate, Commercial and Contacts'),
            ),

            array(
                'name' => 'Competition Law',
                'slug' => str_slug('Competition Law'),
            ),
            array(
                'name' => 'Dispute Resolution',
                'slug' => str_slug('Dispute Resolution'),
            ),

            array(
                'name' => 'Environment Law',
                'slug' => str_slug('Environment Law'),  
            ),
            array(
                'name' => 'Immigration',
                'slug' => str_slug('Immigration'),
            ),
            array(
                'name' => 'Project Infrastructure',
                'slug' => str_slug('Project Infrastructure'),
            ),
           
            array(
                'name' => 'Intellectual Property',
                'slug' => str_slug('Intellectual Property'),
            ),
            
            array(
                'name' => 'International Trade & WTO',
                'slug' => str_slug('International Trade & WTO'),
            ),
            array(
                'name' => 'Property and Real Estate',
                'slug' => str_slug('Property and Real Estate'),
            ),
           
            array(
                'name' => 'Taxation – Direct & Indirect/GST (Domestic & International)',
                'slug' => str_slug('Taxation – Direct & Indirect/GST (Domestic & International)'),
            ),

            array(
                'name' => 'CA Profile',
                'slug' => str_slug('CA Profile'),
            ),

            array(
                'name' => 'CS Profile',
                'slug' => str_slug('CS Profile'),
            ),
        ));
    }
}
