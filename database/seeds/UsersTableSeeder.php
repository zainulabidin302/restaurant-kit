<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'zain@rk.io',
                'phone' => NULL,
                'password' => '$2y$10$/nCpiMeokYKfM1waTlqLC.wjrWgGP1GNaM2Hx0VavHr7edBILpsz2',
                'is_company' => NULL,
                'name' => 'zain',
                'remember_token' => NULL,
                'created_at' => '2017-04-30 07:34:49',
                'updated_at' => '2017-04-30 07:34:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'admin@rk.io',
                'phone' => NULL,
                'password' => '$2y$10$e6VAJwDvVIa82TQaUOBUTOImTXrYYqVlem0Z95Mjfwm3sfyYfk8zK',
                'is_company' => NULL,
                'name' => 'admin',
                'remember_token' => 'Rrpo88P3OzeGfXuIx9bCz9EzQFmfMPHz270ZwyE5fwcaXntlqBTZfv5MuWhv',
                'created_at' => '2017-04-30 07:53:13',
                'updated_at' => '2017-04-30 07:53:13',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'email' => 'cook@rk.io',
                'phone' => NULL,
                'password' => '$2y$10$xvOrp14qS68iGvAL1eeAUOmFYypVi.N0UBYMs.N9u.TTSCd7IObKO',
                'is_company' => NULL,
                'name' => 'cook',
                'remember_token' => 'hB1zZqODZTM0yA7ZauaY85ikFKJv8vLUiHJwRXYAjm0bV5WNPeBoTHGkWiKs',
                'created_at' => '2017-04-30 07:53:38',
                'updated_at' => '2017-04-30 07:53:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'email' => 'waiter@rk.io',
                'phone' => NULL,
                'password' => '$2y$10$8805fqSGzzCTQBj/AVKS4uePQuOjFcZ8N8G3bVYOC6RWDVKyKj0Oi',
                'is_company' => NULL,
                'name' => 'waiter',
                'remember_token' => 'HYUqQkHTeOrvxpd2VoGlXxvSvLoKi99Uq27oZoiNFLs79gsilemrXxC14y73',
                'created_at' => '2017-04-30 07:53:54',
                'updated_at' => '2017-04-30 07:53:54',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'email' => 'supplier@rk.io',
                'phone' => NULL,
                'password' => '$2y$10$F/m0H.DEgh9J14dSR63ze.I8wnZuKcqCkPeDx1q70g8PcPscMthTy',
                'is_company' => NULL,
                'name' => 'supplier',
                'remember_token' => NULL,
                'created_at' => '2017-04-30 07:54:20',
                'updated_at' => '2017-04-30 07:54:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}