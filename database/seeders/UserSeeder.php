<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\Ciclo;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $firstNames = ['Oliver', 'Mary', 'Harry', 'Jane', 'Noah', 'Emily',
            'Jacob', 'Emma', 'Oscar', 'Patricia'];
        $lastnames = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown',
            'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor'];
        $genders = array(
            'male',
            'female',
        );

        for ($i = 0; $i < 10; $i++) {

            $randomName = random_int(0, 9);
            $randomLastName = random_int(0, 9);
            $gender = $genders[$randomName % 2];
            DB::table('users')->insert([
                'name' => $firstNames[$randomName],
                'email' => $firstNames[$randomName] . $lastnames[$randomLastName] . $i . "@zubirimanteo.com",
                'password' => bcrypt("password"),
            ]);
        }

        Ciclo::create(["cod" => '001', "nombre" => "Desarrollo de Aplicaciones Web"]);
        Ciclo::create(["cod" => '002', "nombre" => "Administracion de Sistemas en Red"]);
        Ciclo::create(["cod" => '003', "nombre" => "Desarrollo de Aplicaciones Multiplataforma"]);
        

    }
}