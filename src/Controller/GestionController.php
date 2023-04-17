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
    
    /**
     * @Route("/post/{id}/afficher", name="post_afficher")
     */
    public function AffichagePost(Post $post, ManagerRegistry $managerRegistry): Response
    {
        $em = $managerRegistry->getManager();
        $post->setAffichage(!$post->getAffichage());
        $em->persist($post);
        $em->flush();
        return $this->redirectToRoute('app_gestion');
    }
}
