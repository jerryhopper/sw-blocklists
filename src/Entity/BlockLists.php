<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     routePrefix="/admin",
 *     collectionOperations={"get","post"},
 *     itemOperations={ "get", "put", "delete"  }
 *     )
 * @ORM\Entity(repositoryClass="App\Repository\BlockListsRepository")
 */
class BlockLists
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=36)
     */
    private $user_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DomainCategories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?string
    {
        return $this->user_id;
    }

    public function setUserId(string $user_id): self
    {
        $this->user_id = $user_id;

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
}
