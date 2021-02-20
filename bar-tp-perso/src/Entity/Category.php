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

    public function __construct()
    {
        $this->beer_category = new ArrayCollection();
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
}
