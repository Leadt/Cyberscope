<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PostRepository;


#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $titre_post = null;

    #[ORM\Column(length: 1000)]
    private ?string $description_post = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $image_post = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $affichage = false;

    #[ORM\ManyToOne(inversedBy: 'posts', targetEntity: User::class)]
    private $user;

    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrePost(): ?string
    {
        return $this->titre_post;
    }

    public function setTitrePost(string $titre_post): self
    {
        $this->titre_post = $titre_post;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getDescriptionPost(): ?string
    {
        return $this->description_post;
    }

    public function setDescriptionPost(string $description_post): self
    {
        $this->description_post = $description_post;

        return $this;
    }

    public function getImagePost(): ?string
    {
        return $this->image_post;
    }

    public function setImagePost(?string $image_post): self
    {
        $this->image_post = $image_post;

        return $this;
    }

    public function getAffichage(): bool
    {
        return $this->affichage;
    }

    public function setAffichage(bool $affichage): void
    {
        $this->affichage = $affichage;
    }
}
