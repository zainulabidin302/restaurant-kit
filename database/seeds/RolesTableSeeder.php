<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Admin',
                'details' => 'This is Administrator role.',
                'Departmentid' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Cook',
                'details' => NULL,
                'Departmentid' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Waiter',
                'details' => NULL,
                'Departmentid' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Supplier',
                'details' => NULL,
                'Departmentid' => 1,
            ),
        ));
        
        
    }
}