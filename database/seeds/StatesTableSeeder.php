<?php

use Illuminate\Database\Seeder;

use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'name' => 'Andhra Pradesh',
                'slug' => 'andhra-pradesh'
            ],
            [
                'name' => 'Arunachal Pradesh',
                'slug' => 'arunachal-pradesh'
            ],
            [
                'name' => 'Assam',
                'slug' => 'assam'
            ],
            [
                'name' => 'Bihar',
                'slug' => 'bihar'
            ],
            [
                'name' => 'Chhattisgarh',
                'slug' => 'chhattisgarh'
            ],
            [
                'name' => 'Goa',
                'slug' => 'goa'
            ],
            [
                'name' => 'Gujarat',
                'slug' => 'gujarat'
            ],
            [
                'name' => 'Haryana',
                'slug' => 'haryana'
            ],
            [
                'name' => 'Himachal Pradesh',
                'slug' => 'himachal-pradesh'
            ],
            [
                'name' => 'Jharkhand',
                'slug' => 'jharkhand'
            ],
            [
                'name' => 'Karnataka',
                'slug' => 'karnataka'
            ],
            [
                'name' => 'Kerala',
                'slug' => 'kerala'
            ],
            [
                'name' => 'Madhya Pradesh',
                'slug' => 'madhya-pradesh'
            ],
            [
                'name' => 'Maharashtra',
                'slug' => 'maharashtra'
            ],
            [
                'name' => 'Manipur',
                'slug' => 'manipur'
            ],
            [
                'name' => 'Meghalaya',
                'slug' => 'meghalaya'   
            ],
            [
                'name' => 'Mizoram',
                'slug' => 'mizoram'
            ],
            [
                'name' => 'Nagaland',
                'slug' => 'nagaland'
            ],
            [
                'name' => 'Odisha',
                'slug' => 'odisha'
            ],
            [
                'name' => 'Punjab',
                'slug' => 'punjab'
            ],
            [
                'name' => 'Rajasthan',
                'slug' => 'rajasthan'
            ],
            [
                'name' => 'Sikkim',
                'slug' => 'sikkim'
            ],
            [
                'name' => 'Tamil Nadu',
                'slug' => 'tamil-nadu'
            ],
            [
                'name' => 'Telangana',
                'slug' => 'telangana'
            ],
            [
                'name' => 'Tripura',
                'slug' => 'tripura'
            ],
            [
                'name' => 'Uttar Pradesh',
                'slug' => 'uttar-prasesh'
            ],
            [
                'name' => 'Uttarakhand',
                'slug' => 'uttarakhand'
            ],
            [
                'name' => 'West Bengal',
                'slug' => 'west-bengal'
            ],
            [
                'name' => 'Andaman and Nicobar Islands',
                'slug' => 'andamand-and-nicobar-island'
            ],
            [
                'name' => 'Chandigarh',
                'slug' => 'chandigarh'
            ],
            [
                'name' => 'Dadar and Nagar Haveli',
                'slug' => 'dadar-and-nagar-haveli'
            ],
            [
                'name' => 'Daman and Diu',
                'slug' => 'daman-and-diu'
            ],
            [
                'name' => 'Delhi',
                'slug' => 'delhi'
            ],
            [
                'name' => 'Lakshadweep',
                'slug' => 'lakshadweep'
            ],
            [
                'name' => 'Puducherry',
                'slug' => 'puducherry'
            ],
            [
                'name' => 'Jammu and Kashmir',
                'slug' => 'jammu-and-kashmir'
            ],
            [
                'name' => 'Ladakh',
                'slug' => 'ladakh'
            ],
        ];

        DB::table('states')->delete();

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
