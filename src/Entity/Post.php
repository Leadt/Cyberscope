<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PostRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;


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

    #[ORM\OneToMany(mappedBy: 'id_post', targetEntity: Reaction::class)]
    private Collection $reactions;


    public function __construct()
    {
        $this->reactions = new ArrayCollection();
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

    /**
     * @return Collection<int, Reaction>
     */
    public function getReactions(): Collection
    {
        return $this->reactions;
    }

    public function addReaction(Reaction $reaction): self
    {
        if (!$this->reactions->contains($reaction)) {
            $this->reactions->add($reaction);
            $reaction->setIdPost($this);
        }

        return $this;
    }

    public function removeReaction(Reaction $reaction): self
    {
        if ($this->reactions->removeElement($reaction)) {
            // set the owning side to null (unless already changed)
            if ($reaction->getIdPost() === $this) {
                $reaction->setIdPost(null);
            }
        }

        return $this;
    }
}
