<?php

use Illuminate\Database\Seeder;

class RoleUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_users')->delete();
        
        \DB::table('role_users')->insert(array (
            0 => 
            array (
                'Roleid' => 1,
                'Employeeid' => 1,
            ),
            1 => 
            array (
                'Roleid' => 1,
                'Employeeid' => 2,
            ),
            2 => 
            array (
                'Roleid' => 2,
                'Employeeid' => 3,
            ),
            3 => 
            array (
                'Roleid' => 3,
                'Employeeid' => 4,
            ),
            4 => 
            array (
                'Roleid' => 4,
                'Employeeid' => 5,
            ),
        ));
        
        
    }
}