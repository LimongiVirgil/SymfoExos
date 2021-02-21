<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Beer::class, inversedBy="categories")
     */
    private $beer_category;

    /**
     * @ORM\Column(type="string", length=100, options={"default": "normal"})
     */
    private $term;

    public function __construct()
    {
        $this->beer_category = new ArrayCollection();
        $this->setTerm('normal');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Beer[]
     */
    public function getBeerCategory(): Collection
    {
        return $this->beer_category;
    }

    public function addBeerCategory(Beer $beerCategory): self
    {
        if (!$this->beer_category->contains($beerCategory)) {
            $this->beer_category[] = $beerCategory;
        }

        return $this;
    }

    public function removeBeerCategory(Beer $beerCategory): self
    {
        $this->beer_category->removeElement($beerCategory);

        return $this;
    }

    public function getTerm(): ?string
    {
        return $this->term;
    }

    public function setTerm(string $term): self
    {
        $this->term = $term;

        return $this;
    }
}
