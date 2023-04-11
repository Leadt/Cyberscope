<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/utilisateur', name: 'app_utilisateur')]
    public function index(): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/utilisateur/{id}/admin", name="user_admin")
     */
    public function ajoutAdmin(User $user, UserRepository $userRepository, ManagerRegistry $managerRegistry, int $id)
    {
        // Récupération de l'utilisateur depuis la base de données
        $user = $userRepository->find($id);

        // Ajout du rôle "ROLE_ADMIN" à l'utilisateur
        /*$roles = $user->getRoles();
        $user->addRole('ROLE_ADMIN');
        $roles[] = new Role('ROLE_ADMIN');
        $user->setRoles($roles);

        // Enregistrement des modifications dans la base de données
        $entityManager = $managerRegistry->getManager();
        $entityManager->persist($user);
        $entityManager->flush();*/

        return $this->redirectToRoute('app_homepage');
    }

    #[Route('/utilisateur/{id}', name: "app_utilisateurPost")]
    public function comptePerso(PostRepository $post, ManagerRegistry $managerRegistry, int $id): Response
    {
        $entityManager = $managerRegistry->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);

        $liste_post = $post->findBy(['user' => $user], ['id' => 'DESC']);
        return $this->render('utilisateur/compteExterne.html.twig', [
            'controller_name' => 'PostController',
            'liste_post' => $liste_post,
            'user' => $user,
        ]);
    }
}
