<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use App\Entity\Reaction;
use App\Form\PostFormType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Bundle\SecurityBundle\Security as SecurityBundleSecurity;

class PostController extends AbstractController
{
    #[Route('/', name: "app_homepage")]
    public function index(PostRepository $post): Response
    {
        //récupère la liste des posts par ordre d'identifiant décroissant pour qu'ils soient affichés à partir du plus récent
        $liste = $post->findBy(array(), array('id' => 'DESC'));

        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
            'liste_post' => $liste,
        ]);
    }

    #[Route('/formPost', name: "app_formPost")]
    public function formPost(Request $request, EntityManagerInterface $entityManager, SecurityBundleSecurity $security, SluggerInterface $slugger): Response
    {
        //récupération de l'utilisateur en cours
        $user = $this->getUser();
        $post = new Post();
        //association de l'utilisateur au post qui vient d'être envoyé
        $post->setUser($user);
        $form = $this->createForm(PostFormType::class, $post);
        $form->handleRequest($request);

        //Code exécuté si le formulaire répond à toutes les demandes
        //Par ex, si l'image n'est pas de la bonne taille, le formulaire ne s'enverra pas
        if ($form->isSubmitted() && $form->isValid()) {
            $image_post = $form->get('image_post')->getData();
            if ($image_post) {
                $originalFilename = pathinfo($image_post->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image_post->guessExtension();

                // Ajout de l'image dans le dossier public/images
                try {
                    $image_post->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // redirection vers la page d'accueil si un probème survient
                    $this->redirectToRoute('app_homepage');
                }

                $post->setImagePost($newFilename);
            }


            //ajout des infos à la bdd
            $entityManager->persist($post);
            $entityManager->flush();

            // Instancier une nouvelle entité Reaction pour chaque utilisateur existant et initialiser les boolean des réactions à false
            $users = $entityManager->getRepository(User::class)->findAll();
            foreach ($users as $user) {
                $reaction = new Reaction();
                $reaction->setIdPost($post); // associer la nouvelle entité Reaction au post correspondant
                $reaction->setIdUser($user); // associer la nouvelle entité Reaction à l'utilisateur correspondant
                //Chaque reaction est initialisé à false
                $reaction->setCent(false);
                $reaction->setCoeur(false);
                $reaction->setPouce(false);
                $reaction->setPoulpe(false);

                // Enregistrer la nouvelle entité Reaction en base de données
                $entityManager->persist($reaction);
            }
            $entityManager->flush();

            //redirection sur la page du fil d'actualité une fois que la bdd est mise à jour
            return $this->redirectToRoute('app_homepage');
        }

        /*Code à mettre pour trouver l'erreur si le form n'est pas valide 

        $errors = array();
        
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
