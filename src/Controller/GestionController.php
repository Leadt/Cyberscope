<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GestionController extends AbstractController
{
    //Permet de récupérer la liste de tous les utilisateurs et de tous les posts
    //Renvoie les données à la page de gestion
    #[Route('/gestion', name: 'app_gestion')]
    public function index(UserRepository $user, PostRepository $post): Response
    {
        $liste_user = $user->findAll();
        $liste_post = $post->findBy(array(), array('id' => 'DESC'));

        return $this->render('gestion/index.html.twig', [
            'controller_name' => 'GestionController',
            'liste_user' => $liste_user,
            'liste_post' => $liste_post,
        ]);
    }

    //Permet de changer la valeur du boolean de l'affichage

    #[Route('/post/{id}/afficher', name: 'post_afficher')]
    public function AffichagePost(Post $post, ManagerRegistry $managerRegistry): Response
    {
        $em = $managerRegistry->getManager();
        //Si Affichage=true => false et si Affichage=false =>true
        $post->setAffichage(!$post->getAffichage());
        $em->persist($post);
        $em->flush();
        return $this->redirectToRoute('app_gestion');
    }
}
