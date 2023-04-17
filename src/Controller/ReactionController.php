<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReactionController extends AbstractController
{
    #[Route('/reaction', name: 'app_reaction')]
    public function index(): Response
    {
        return $this->render('reaction/index.html.twig', [
            'controller_name' => 'ReactionController',
        ]);
    }

    public function updateBoolean(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $myEntity = $entityManager->getRepository(MyEntity::class)->findOneById($request->get('id'));

        if (!$myEntity) {
            throw $this->createNotFoundException('The entity does not exist');
        }

        $myEntity->setMyBoolean($request->get('value'));
        $entityManager->flush();

        return new Response('OK');
    }
}
