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
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Beer::class, mappedBy="category")
     */
    private $beers_category;

    public function __construct()
    {
        $this->beers_category = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Beer[]
     */
    public function getBeersCategory(): Collection
    {
        return $this->beers_category;
    }

    public function addBeersCategory(Beer $beersCategory): self
    {
        if (!$this->beers_category->contains($beersCategory)) {
            $this->beers_category[] = $beersCategory;
            $beersCategory->addCategory($this);
        }

        return $this;
    }

    public function removeBeersCategory(Beer $beersCategory): self
    {
        if ($this->beers_category->removeElement($beersCategory)) {
            $beersCategory->removeCategory($this);
        }

        return $this;
    }
}
