<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     routePrefix="/admin",
 *     collectionOperations={"get","post"},
 *     itemOperations={ "get", "put"  }
 *     )
 * @ORM\Entity(repositoryClass="App\Repository\DomainsRepository")
 */
class Domains
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120,unique=true)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DomainCategories")
     */
    private $category;

    /**
     * @ORM\Column(type="integer",options={"default"="1"})
     */
    private $enabled;

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

    public function getCategory(): ?DomainCategories
    {
        return $this->category;
    }

    public function setCategory(?DomainCategories $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
