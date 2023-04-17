<?php

namespace App\Entity;

use App\Repository\ReactionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReactionRepository::class)]
class Reaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private ?bool $cent = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private ?bool $coeur = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]    
    private ?bool $poulpe = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]    
    private ?bool $pouce = null;

    #[ORM\ManyToOne(inversedBy: 'reactions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Post $id_post = null;

    #[ORM\ManyToOne(inversedBy: 'reactions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isCent(): ?bool
    {
        return $this->cent;
    }

    public function setCent(bool $cent): self
    {
        $this->cent = $cent;

        return $this;
    }

    public function isCoeur(): ?bool
    {
        return $this->coeur;
    }

    public function setCoeur(bool $coeur): self
    {
        $this->coeur = $coeur;

        return $this;
    }

    public function isPoulpe(): ?bool
    {
        return $this->poulpe;
    }

    public function setPoulpe(bool $poulpe): self
    {
        $this->poulpe = $poulpe;

        return $this;
    }

    public function isPouce(): ?bool
    {
        return $this->pouce;
    }

    public function setPouce(bool $pouce): self
    {
        $this->pouce = $pouce;

        return $this;
    }

    public function getIdPost(): ?Post
    {
        return $this->id_post;
    }

    public function setIdPost(?Post $id_post): self
    {
        $this->id_post = $id_post;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }
}
