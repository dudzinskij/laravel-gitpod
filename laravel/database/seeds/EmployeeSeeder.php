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
            'Michael Pisula' => 'michael.pisula@usbank.com',
            'Dennis Sheehan' => 'dennis.sheehan@usbank.com',
            'Lahar Shah' => 'lahar.shah@usbank.com',
            'Shaun Cave' => 'shaun.cave@usbank.com'
        ];

        foreach ($employees as $name => $email) {
            \App\Employee::create([
                'name' => $name,
                'email' => $email
            ]);
        }
    }
}
