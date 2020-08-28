<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $employees = [
            'Michael P' => 'michael@mysampleapi.com',
            'Dennis S' => 'michael@mysampleapi.com',
            'Lahar S' => 'michael@mysampleapi.com',
            'Shaun C' => 'michael@mysampleapi.com'
        ];

        foreach ($employees as $name => $email) {
            \App\Employee::create([
                'name' => $name,
                'email' => $email
            ]);
        }
    }
}
