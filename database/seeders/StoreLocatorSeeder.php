<?php

namespace Database\Seeders;

use Botble\Ecommerce\Models\StoreLocator;
use Illuminate\Database\Seeder;

class StoreLocatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreLocator::truncate();

        StoreLocator::create([
            'name'                 => 'HASA SG',
            'email'                => 'sales@botble.com',
            'phone'                => '18006268',
            'address'              => 'North Link Building, 10 Admiralty Street',
            'state'                => 'Singapore',
            'city'                 => 'Singapore',
            'country'              => 'SG',
            'is_primary'           => 1,
            'is_shipping_location' => 1,
        ]);
    }
}
