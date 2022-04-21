<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Activity;
use App\Models\Rapport;
use App\Models\Role;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $activity1=Activity::create(['type'=>'prevention Specialise','name'=>'Villiers Sur Marne','idVilles'=>'1']);
        $activity2=Activity::create(['type'=>'prevention Specialise','name'=>'Plessis Trevise','idVilles'=>'2']);
        $activity3=Activity::create(['type'=>'prevention Specialise','name'=>'La Queue en Brie','idVilles'=>'3']);
        $activity4=Activity::create(['type'=>'prevention Specialise','name'=>'Bry sur Marne','idVilles'=>'4']);
        $activity5=Activity::create(['type'=>'auto-ecole','name'=>'Villiers Sur Marne','idVilles'=>'1']);

        $Action = Action::create(['idActivites'=>'1' , 'dateAction'=>'2022-06-06','title'=>'One Title', 'address'=>'14 rue cheigneau','image'=>'Image','content'=>'some contents'

    ]);

    $rapport1= Rapport::create(['idActivites'=>'1', 'annee'=>'2019','fichier'=>'fichier1','idActivites'=>'1']);
    $rapport2= Rapport::create(['idActivites'=>'1', 'annee'=>'2021','fichier'=>'fichier2','idActivites'=>'1']);
    $rapport3= Rapport::create(['idActivites'=>'1', 'annee'=>'2022','fichier'=>'fichier3','idActivites'=>'1']);

    $superAdmin= Role::create(['name'=>'superAdmin']);
    $admin= Role::create(['name'=>'admin']);
    $customer= Role::create(['name'=>'customer']);

    $user= User::create(['idRoles'=>1,'firstName'=>'this is a name','lastName'=>'xxxxxx','email'=>'secretariat@emmaus-synergie.fr','password'=>bcrypt('emmaussynergie1')]);

    $ville1=Ville::create(['name'=>'Villiers Sur Marne']);
    $ville3=Ville::create(['name'=>'Plessis Trevise']);
    $ville2=Ville::create(['name'=>'La Queue en Brie']);
    $ville4=Ville::create(['name'=>'Bry sur Marne']);
}
}
