<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Tools\Console\ConsoleRunner;


#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $titre_post = null;

    #[ORM\Column(length: 155)]
    private ?string $description_post = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $image_post = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $cent = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $coeur = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $pouce = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $poulpe = false;

    #[ORM\ManyToOne(inversedBy: 'posts', targetEntity: User::class)]
    private $user;

    #[ORM\ManyToOne(inversedBy: 'post', targetEntity: Commentaire::class)]
    private $commentaires;


    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
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

    public function getCoeur(): bool
    {
        return $this->coeur;
    }

    public function setCoeur(bool $coeur): void
    {
        $this->coeur = $coeur;
    }

    public function getPouce(): bool
    {
        return $this->pouce;
    }

    public function setPouce(bool $pouce): void
    {
        $this->cent = $pouce;
    }

    public function getPoulpe(): bool
    {
        return $this->poulpe;
    }

    public function setPoulpe(bool $poulpe): void
    {
        $this->cent = $poulpe;
    }

    public function getCent(): bool
    {
        return $this->cent;
    }

    public function setMyBooleanProperty(bool $cent): void
    {
        $this->cent = $cent;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    /*
    
    public function getCommentaire(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setCom($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaires): self
    {
        if ($this->commentaires->removeElement($commentaires)) {
            // set the owning side to null (unless already changed)
            if ($commentaires->getCom() === $this) {
                $commentaires->setCom(null);
            }
        }

        return $this;
    }*/
}
