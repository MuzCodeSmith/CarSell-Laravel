<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Car Types
        $carTypes = ['Sedan', 'Hatchback', 'SUV', 'Pickup Truck', 'Minivan', 'Jeep', 'Coupe', 'Crossover', 'Sports Car'];

        foreach ($carTypes as $type) {
            CarType::factory()->state(['name' => $type])->create();
        }

        // Create Fuel Types
        $fuelTypes = ['Gasoline', 'Diesel', 'Electric', 'Hybrid'];

        foreach ($fuelTypes as $type) {
            FuelType::factory()->state(['name' => $type])->create();
        }

        // Create States and Cities
        $states = [
            'California' => ['Los Angeles', 'San Francisco', 'San Diego', 'San Jose'],
            'Texas' => ['Houston', 'San Antonio', 'Dallas', 'Austin', 'Fort Worth'],
            'Florida' => ['Miami', 'Orlando', 'Tampa', 'Jacksonville', 'St. Petersburg'],
            'New York' => ['New York City', 'Buffalo', 'Rochester', 'Yonkers', 'Syracuse'],
            'Illinois' => ['Chicago', 'Aurora', 'Naperville', 'Joliet', 'Rockford'],
            'Pennsylvania' => ['Philadelphia', 'Pittsburgh', 'Allentown', 'Erie', 'Reading'],
            'Ohio' => ['Columbus', 'Cleveland', 'Cincinnati', 'Toledo', 'Akron'],
            'Georgia' => ['Atlanta', 'Augusta', 'Columbus', 'Savannah', 'Athens'],
            'North Carolina' => ['Charlotte', 'Raleigh', 'Greensboro', 'Durham', 'Winston-Salem'],
            'Michigan' => ['Detroit', 'Grand Rapids', 'Warren', 'Sterling Heights', 'Ann Arbor'],
        ];

        foreach ($states as $stateName => $cities) {
            $state = State::factory()->state(['name' => $stateName])->create();

            foreach ($cities as $cityName) {
                City::factory()->state([
                    'name' => $cityName,
                    'state_id' => $state->id
                ])->create();
            }
        }

        // Create Makers and Models
        $makers = [
            'Toyota' => ['Camry', 'Corolla', 'Highlander', 'RAV4', 'Prius'],
            'Ford' => ['F-150', 'Escape', 'Explorer', 'Mustang', 'Fusion'],
            'Honda' => ['Civic', 'Accord', 'CR-V', 'Pilot', 'Odyssey', 'HR-V'],
            'Chevrolet' => ['Silverado', 'Equinox', 'Malibu', 'Impala', 'Cruze'],
            'Nissan' => ['Altima', 'Sentra', 'Rogue', 'Maxima', 'Murano', 'Pathfinder'],
            'Lexus' => ['RX400', 'RX450', 'RX350', 'ES350', 'LS500', 'IS300'],
        ];

        foreach ($makers as $makerName => $models) {
            $maker = Maker::factory()->state(['name' => $makerName])->create();

            foreach ($models as $modelName) {
                Model::factory()->state([
                    'name' => $modelName,
                    'maker_id' => $maker->id
                ])->create();
            }
        }

        // Create 5 Users
        User::factory()->count(3)->create();

        // Create Users with Cars and Images
        User::factory()
        ->count(2)
        ->has(
            Car::factory()
                ->count(50)
                ->has(
                    CarImage::factory()
                        ->count(5)
                        ->sequence(fn ($sequence) => [
                            'position' => $sequence->index % 5 + 1
                        ])
                        ->sequence(
                            ['position'=>1],
                            ['position'=>2],
                            ['position'=>3],
                            ['position'=>4],
                            ['position'=>5],
                        )
                )
                ->hasFeatures(),
            'favouriteCars'
        )
        ->create();   
    }
}
