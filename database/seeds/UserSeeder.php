<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        // AKTOR
            // 1 : admin
            // 2 : pencari
            // 3 : penemu

        $useradmin = array("admin1", "admin2", "admin3");
        $emailadmin = array("ranggakusumad@gmail.com", "liafrchmdi@gmail.com", "ismail.a2803@gmail.com");

        //insert user admin
        $count = 0;
        foreach($useradmin as $username) {
            $user = new User;

            $user->nama = $username;
            $user->username = $username;
            $user->password = bcrypt($username);
            $user->email = $emailadmin[$count];
            $user->no_identitas = "0123456789";
            $user->alamat = "ITS, Surabaya";
            $user->nohp = "0123456789";
            $user->aktor = 1;
            $count += 1;
            
            $user->save();
        };
    }
}
