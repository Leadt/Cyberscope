<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_commentaire' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\ConnexionController::index'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\ConnexionController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\PostController::index'], [], [['text', '/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'app_utilisateur' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/utilisateur']], [], [], []],
];
