<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security as SecurityBundleSecurity;

class PostController extends AbstractController
{
    #[Route('/', name: "app_homepage")]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    #[Route('/formPost', name: "app_formPost")]
    public function formPost(Request $request, EntityManagerInterface $entityManager, SecurityBundleSecurity $security): Response
    {
        //$user = $this->getUser();
        //$post->setUser($user->getId());
        $post = new Post();
        $form = $this->createForm(PostFormType::class, $post);
        $form->handleRequest($request);
        //$entityManager->setUser($this->getUser());

        //if ($form->isSubmitted()) {
        if ($form->isSubmitted() && $form->isValid()) {
            //dd('bonjour');
            //var_dump($request->request->all());
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('app_homepage');
        }
        $errors = array();

        /*Code à mettre pour trouver l'erreur si le form n'est pas valide 
        
        if ($form->isSubmitted() && !$form->isValid()) {
            var_dump($request->request->all());
            $errors = $form->getErrors(true);
            foreach ($errors as $error) {
                $fieldName = $error->getOrigin()->getName();
                $errorMessage = $error->getMessage();
                // Do something with the field name and error message, such as display it to the user
            }
        }

        return $this->render('post/formPost.html.twig', [
            'Postform' => $form->createView(),
            'errors' => $errors
        ]);*/

        return $this->render('post/formPost.html.twig', [
            'Postform' => $form->createView()
        ]);
    }
}
