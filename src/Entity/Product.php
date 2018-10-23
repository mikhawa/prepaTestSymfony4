<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $brochure;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrochure(): ?string
    {
        return $this->brochure;
    }

    public function setBrochure(?string $brochure): self
    {
        $this->brochure = $brochure;

        return $this;
    }
}
