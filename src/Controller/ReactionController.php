<?php

namespace App\Controller;

use App\Entity\Reaction;
use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReactionController extends AbstractController
{
    #[Route('/reaction', name: 'app_reaction')]
    public function index(): Response
    {
        return $this->render('reaction/index.html.twig', [
            'controller_name' => 'ReactionController',
        ]);
    }

    #[Route('/update-reaction', name: 'update-reaction', methods: 'POST')]
    public function updateReaction(Request $request, Post $post, ManagerRegistry $managerRegistry): Response
    {
        dd('je suis dans updateReaction');
        var_dump('je suis dans updateReaction');
        $entityManager = $managerRegistry->getManager();
        $user = $this->getUser();

        // Get reaction type and checked status from request
        $reactionType = $request->request->get('reactionType');
        $isChecked = $request->request->get('isChecked');

        // Update the corresponding field in the Reaction entity
        $reaction = $entityManager->getRepository(Reaction::class)->findOneBy(['id_post' => $post, 'id_user' => $user]);
        // if (!$reaction) {
        //     // Create a new Reaction entity if none exists
        //     $reaction = new Reaction();
        //     $reaction->setIdPost($post);
        //     $reaction->setIdUser($user);
        // }

        switch ($reactionType) {
            case 'cent':
                $reaction->setCent($isChecked);
                break;
            case 'coeur':
                $reaction->setCoeur($isChecked);
                break;
            case 'poulpe':
                $reaction->setPoulpe($isChecked);
                break;
            case 'pouce':
                $reaction->setPouce($isChecked);
                break;
            default:
                return new Response('Invalid reaction type', 400);
        }

        $entityManager->persist($reaction);
        $entityManager->flush();

        return new Response('OK', 200);
    }
}
