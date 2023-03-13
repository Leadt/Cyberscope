<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

// Obtenez les paramètres de connexion à la base de données à partir de votre fichier .env ou écrivez-les directement ici
$connectionParams = [
    'dbname' => 'data.db',
    'user' => 'nom_d_utilisateur',
    'password' => 'mot_de_passe',
    'host' => 'adresse_du_serveur',
    'driver' => 'pdo_mysql',
];

// Obtenez le chemin vers vos entités
$entityPath = array(__DIR__.'/path/to/entities');

// Configurez les options de configuration de Doctrine
$config = Setup::createAnnotationMetadataConfiguration($entityPath, $isDevMode = true, $proxyDir = null, $cache = null, $useSimpleAnnotationReader = false);

// Créez une instance de l'EntityManager
$entityManager = EntityManager::create($connectionParams, $config);
