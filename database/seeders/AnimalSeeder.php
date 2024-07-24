<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator\Faker;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animals = [
            [
                'name' => 'Leone',
                'species' => 'Panthera leo',
                'age' => 5
            ],
            [
                'name' => 'Tigre',
                'species' => 'Panthera tigris',
                'age' => 3
            ],
            [
                'name' => 'Elefante',
                'species' => 'Loxodonta',
                'age' => 10
            ],
            [
                'name' => 'Giraffa',
                'species' => 'Giraffa camelopardalis',
                'age' => 7
            ],
            [
                'name' => 'Zebra',
                'species' => 'Equus quagga',
                'age' => 4
            ],
        ];

        foreach ($animals as $animalData) {
            $animal = new Animal();
            $animal->name = $animalData['name'];
            $animal->species = $animalData['species'];
            $animal->age = $animalData['age'];
            $animal->save();
        }
    }
}
