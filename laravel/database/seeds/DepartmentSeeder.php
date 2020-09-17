<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $departments = [
            'Human Resources' => [
                'description' => 'The human resources department',
                'slogan' => 'You\'re Fired'
            ],
            'Information Technology' => [
                'description' => 'The information technology department',
                'slogan' => 'Works on my machine'
            ],
            'Security' => [
                'description' => 'The security department',
                'slogan' => 'There is no way they can hack this'
            ],
            'Mortgages' => [
                'description' => 'The mortgages department',
                'slogan' => 'Declined.'
            ]
        ];

        foreach ($departments as $name => $values) {
            \App\Department::create([
                'name' => $name,
                'description' => $values['description'],
                'slogan' => $values['slogan']
            ]);
        }
    }
}
