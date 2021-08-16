<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\BaseConnection;
use CodeIgniter\Database\Seeder;
use Config\Database;
use Faker\Provider\en_US\Address;

class CategoriesSeeder extends Seeder
{
    public function __construct(Database $config, BaseConnection $db = null)
    {
        parent::__construct($config, $db);
    }

    public function run()
    {
        static::faker()->addProvider(new Address(static::faker()));
        $this->fakeCountries(5);
    }

    /**
     * Create Fake Countries in the database
     * @param int $numberOfCounteries number of countries to create
     * @return void
     */
    private function fakeCountries(int $numberOfCounteries)
    {
        for ($i = 0; $i < $numberOfCounteries; $i++) {
            $countryId = model('CategoryModel')->insert([
                'name' => static::faker()->country(),
            ], true);

            $this->fakeStates($countryId, 5);
        }
    }

    /**
     * Create Fake States in the database
     * @param int $numberOfStates number of states to create
     * @return void
     */
    private function fakeStates($countryId, int $numberOfStates)
    {
        for ($j = 0; $j < $numberOfStates; $j++) {
            $stateId = model('CategoryModel')->insert(
                [
                    'name' => static::faker()->state(),
                    'parent_id' => $countryId,
                ]
            );
            $this->fakeCities($stateId, 5);
        }
    }

    /**
     * Create Fake Cities in the database
     * @param int $numberOfCities number of cities to create
     * @return void
     */
    private function fakeCities($stateId, int $numberOfCities)
    {
        for ($k = 0; $k < $numberOfCities; $k++) {
            model('CategoryModel')->insert(
                [
                    'name' => static::faker()->city(),
                    'parent_id' => $stateId,
                ]
            );
        }
    }
}
