<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/utilisateur', name: 'app_utilisateur')]
    public function index(ManagerRegistry $managerRegistry, Security $security): Response
    {
        $entityManager = $managerRegistry->getManager();
        //$user = $entityManager->getRepository(User::class)->find($id);
        // $nb_post = $user->getPost()->count();

        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'PostController',
            //'nb_post' => $nb_post,
        ]);
    }

    //Permet de rendre un utilisateur administrateur
    #[Route('/admin/utilisateur/{id}/ajoutadmin', name: 'ajout_admin')]
    public function ajoutAdmin(User $user, EntityManagerInterface $entityManager): Response
    {
        $user->setRoles(['ROLE_ADMIN']);
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_homepage');
    }

    //Permet de recupérer les post associé à un utulisateur en particulier à partir de son identifiant
    #[Route('/utilisateur/{id}', name: "app_utilisateurPost")]
    public function compteExterne(PostRepository $post, ManagerRegistry $managerRegistry, int $id): Response
    {
        $entityManager = $managerRegistry->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);

        $liste_post = $post->findBy(['user' => $user], ['id' => 'DESC']);
        $nb_post = $user->getPost()->count();

        return $this->render('utilisateur/compteExterne.html.twig', [
            'controller_name' => 'PostController',
            'liste_post' => $liste_post,
            'nb_post' => $nb_post,
            'user' => $user,
        ]);
    }
}
