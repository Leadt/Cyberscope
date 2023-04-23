<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
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

        return $this->render('utilisateur/profil.html.twig', [
            'controller_name' => 'PostController',
            'liste_post' => $liste_post,
            'nb_post' => $nb_post,
            'user' => $user,
        ]);
    }
}
