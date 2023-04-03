<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]

class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $texte_com = null;

    // #[ORM\Column(length: 20)]
    //private ?string $pseudo_user = null;

    /*
    #[ORM\Column(length: 20)]
    #[ORM\ManyToOne(inversedBy: 'pseudo_user')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $user = null;*/

    #[ORM\Column(length: 20)]
    #[ORM\ManyToOne(inversedBy: 'commentaires', targetEntity: User::class)]
    private $user;

    /*
    #[ORM\ManyToOne(inversedBy: 'commentaire')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Post $com = null;*/

    #[ORM\ManyToOne(inversedBy: 'commentaires', targetEntity: Post::class)]
    private $post;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexteCom(): ?string
    {
        return $this->texte_com;
    }

    public function setTexteCom(string $texte_com): self
    {
        $this->texte_com = $texte_com;

        return $this;
    }

    /*public function getPseudoUser(): ?string
    {
        return $this->pseudo_user;
    }

    public function setPseudoUser(string $pseudo_user): self
    {
        $this->pseudo_user = $pseudo_user;

        return $this;
    }*/

    public function getUser(): ?Post
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function setPost(Post $post)
    {
        $this->post = $post;

        return $this;
    }
}
