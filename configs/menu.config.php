<?php 

$menuConfig = [
    "pages" => [
                [
            "slug" => "home",
            "name" => "Home",
        ],
        [
            "slug" => "profile",
            "name" => "Profile",
            "authenticated" => true,

        ],
              [
            "slug" => "contacts",
            "name" => "Contacts",
        ],
        [
            "slug" => "login",
            "name" => "Se Connecter",
            "authenticated" => false,
        ], 
        [
            "slug" => "logout",
            "name" => "Se Donnecter",
            "authenticated" => true,
        ],   
    ]
];