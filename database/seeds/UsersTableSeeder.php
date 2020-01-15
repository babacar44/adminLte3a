<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = new User();
        $user->nom = "superadmin";
        $user->is_superadmin = true;    
        $user->matricule ="0000";
        $user->email = "superadmin@delmas.com";
        $user->password = bcrypt('secret');
        $user->profil = "superadmin";
        $user->matricule_validateur = null;
        $user->departement = null;
        $user->pays = "Senegal";
        $user->statut = "actif";
        $user->save();
    }
}
