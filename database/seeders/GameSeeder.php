<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            "Fortnite",
            "Red Dead Redemption 2",
            "Grand Theft Auto V",
            "VALORANT",
            "NARAKA: BLADEPOINT",
            "STAR WARS™: Squadrons",
            "Among Us",
            "Evil Dead: The Game",
            "Shadow of the Tomb Raider: Definitive Edition",
            "Fort Triumph",
            "ARK: Survival Evolved",
            "Shadow Tactics",
            "theHunter: Call of the Wild™",
            "Rising Storm 2: Vietnam",
            "Farming Simulator 19",
            "Assassin's Creed® Valhalla",
            "Wolfenstein: The New Order",
            "Car Mechanic Simulator 2018",
            "Warface",
            "HITMAN - Game of the Year Edition",
            "The Witcher 3: Wild Hunt - Game of the Year Edition",
            "Quake",
            "Enter the Gungeon",
        ];
        $images = [
            'https://cdn2.unrealengine.com/en-23br-zerobuild-1p-1920x1080-1920x1080-7bb21824d768.jpg',
            'https://cdn1.epicgames.com/b30b6d1b4dfd4dcc93b5490be5e094e5/offer/RDR2476298253_Epic_Games_Wishlist_RDR2_2560x1440_V01-2560x1440-2a9ebe1f7ee202102555be202d5632ec.jpg',
            'https://cdn1.epicgames.com/0584d2013f0149a791e7b9bad0eec102/offer/GTAV_EGS_Artwork_2560x1440_Landscaped%20Store-2560x1440-79155f950f32c9790073feaccae570fb.jpg',
            'https://cdn1.epicgames.com/offer/cbd5b3d310a54b12bf3fe8c41994174f/EGS_VALORANT_RiotGames_S1_2560x1440-e746d8e946fd6dfc9f17bc343e94500a',
            'https://cdn1.epicgames.com/offer/0c6aee83b9b64372bf44a043001325f2/EGS_NARAKABLADEPOINT_24Entertainment_S1_2560x1440-985473f9d33c11c46e35c8e02136ed0d',
            'https://cdn1.epicgames.com/bc2b0372eaa448469cb9a769f27acea1/offer/wide-2560x1440-f09b204b4eb17f85e997a247901b8d81.jpg',
            'https://cdn1.epicgames.com/salesEvent/salesEvent/amoguslandscape_2560x1440-3fac17e8bb45d81ec9b2c24655758075',
            'https://cdn1.epicgames.com/offer/95e09a8c24c44684bca1a6f25aea920c/EGS_EvilDeadTheGame_SaberInteractiveInc_S1_2560x1440-fde136bc32f2b93006b9df0bc421fec0_2560x1440-fde136bc32f2b93006b9df0bc421fec0',
            'https://cdn1.epicgames.com/offer/4b5461ca8d1c488787b5200b420de066/egs-shadowofthetombraiderdefinitiveedition-eidosmontralcrystaldynamicsnixxessoftware-s1-2560x1440-eca6506e95a1_2560x1440-193582a5fd76a593804e0171d6395cf4',
            'https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_FortTriumph_CookieByteEntertainment_S1_2560x1440-a0b5e1aeb62c1ee5550d97886ab475a3',
            'https://cdn1.epicgames.com/ark/offer/EGS_ARKSurvivalEvolved_StudioWildcard_S1-2560x1440-c316afb7c33a9dfb892eef6b99169e43.jpg',
            'https://cdn1.epicgames.com/undefined/offer/EGS_MimimiGames_ShadowTacticsBladesoftheShogun_S3-1360x766-216c2e04b177c6b7252f1f535edef030.jpg',
            'https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_theHunterCalloftheWild_ExpansiveWorlds_S1_2560x1440-69120885e0b3acfb87f34ac0bad68ec6',
            'https://cdn1.epicgames.com/3542a1df211e492bb2abecb7c734f7f9/offer/EGS_RisingStorm2Vietnam_AntimatterGamesTripwireInteractive_S3-2560x1440-e08edd93cb71bf15b50a74f3de2d17b0.jpg',
            'https://cdn1.epicgames.com/493e9ad801e8487497fe7840cb8404bb/offer/EGS-GIANTS-FS19-1360x766_Standard-1360x766-3ff704f0c5b6993465dbbeb797b181e9acf313e3.jpg',
            'https://cdn1.epicgames.com/400347196e674de89c23cc2a7f2121db/offer/AC%20KINGDOM%20PREORDER_STANDARD%20EDITION_EPIC_Key_Art_Wide_3840x2160-3840x2160-485fe17203671386c71bde8110886c7d.jpg',
            'https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_WolfensteinTheNewOrder_MachineGames_S1_2560x1440-3a75b2c45a2a12e882feb2e2ff180b0c',
            'https://cdn1.epicgames.com/offer/226306adde104c9092247dcd4bfa1499/EGS_CarMechanicSimulator2018_RedDotGames_S1_2560x1440-3489ef1499e64c168fdf4b14926d2c23',
            'https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_Warface_AllodsTeam_S1_2560x1440-bf3c5da7b0239523117b1ff2bba16dc9',

            'https://cdn1.epicgames.com/3c06b15a8a2845c0b725d4f952fe00aa/offer/EGS_HITMANGameofTheYeardEdition_IOInteractiveAS_Bundles_S1-2560x1440-b297592e63790724bd0fbf726c3fe6f7.jpg',
            'https://cdn1.epicgames.com/offer/14ee004dadc142faaaece5a6270fb628/EGS_TheWitcher3WildHuntGameoftheYearEdition_CDPROJEKTRED_S1_2560x1440-82eb5cf8f725e329d3194920c0c0b64f',
            'https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_Quake_idSoftwareNightdiveStudios_S1_2560x1440-b31ed6ea4d89261b0556846ffd842d67',
            'https://cdn1.epicgames.com/epic/offer/Gungeon_StorePromo-1440x811-fcf77719c27a5d7ace555e868ea35456.jpg',
            ];

        foreach (array_combine($names, $images) as $name => $image) {
            Game::factory()->create(
                [
                    "name"=> $name,
                    "image"=> $image,
                ]
            );
        }

    }
}
