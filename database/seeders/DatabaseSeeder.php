<?php

namespace Database\Seeders;

use App\Models\Activity;
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

        $ville1=Ville::create(['name'=>'Villiers Sur Marne']);
        $ville3=Ville::create(['name'=>'Plessis Trevise']);
        $ville2=Ville::create(['name'=>'La Queue en Brie']);
        $ville4=Ville::create(['name'=>'Bry sur Marne']);



        // $activite=Activity::create(['type'=>'prevention Specialisee','nom'=>'villiers sur marne','idVilles'=>'1']);
        // $activite=Activity::create(['type'=>'prevention Specialisee','nom'=>'plessis trevise','idVilles'=>'3']);
        // $activite=Activity::create(['type'=>'prevention Specialisee','nom'=>'la queue en brie','idVilles'=>'2']);
        // $activite=Activity::create(['type'=>'prevention Specialisee','nom'=>'bry sur marne','idVilles'=>'4']);
        // $activite=Activity::create(['type'=>'auto-ecole','nom'=>'villiers sur marne','idVilles'=>'1']);

    //     Actions::create([
    //         'dateAction'=>'2022-05-31',
    //         'titre'=>'MonTitre',
    //         'contenu'=>'MonContenu',
    //         'image'=>'monImage',
    //         'adresseAction'=>'11 rue feederic passy',
    //         'idActivites'=>'2'   ]);

    //     RapportsDesActivites::create(['annee'=>'2019','lien'=>'lien1','idActivites'=>'2']);
    //     RapportsDesActivites::create(['annee'=>'2020','lien'=>'lien2','idActivites'=>'2']);
    //     RapportsDesActivites::create(['annee'=>'2021','lien'=>'lien3','idActivites'=>'2']);




    //    $super= Role::create(['nom'=>'superAdmin']);
    //    $admin= Role::create(['nom'=>'admin']);

    //     User::create(['nom'=>'monNom','prenom'=>'monPrenom','email'=>'secretariat@emmaus-synergie.fr','password'=>bcrypt('emmaussynergie'),'idRoles'=>$admin->id]);
    }
}
