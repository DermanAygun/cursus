<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 */
class Location
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $Breedtegraad;

    /**
     * @ORM\Column(type="float")
     */
    private $Lengtegraad;

    /**
     * @ORM\Column(type="blob")
     */
    private $Image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getBreedtegraad(): ?float
    {
        return $this->Breedtegraad;
    }

    public function setBreedtegraad(float $Breedtegraad): self
    {
        $this->Breedtegraad = $Breedtegraad;

        return $this;
    }

    public function getLengtegraad(): ?float
    {
        return $this->Lengtegraad;
    }

    public function setLengtegraad(float $Lengtegraad): self
    {
        $this->Lengtegraad = $Lengtegraad;

        return $this;
    }

    public function getImage()
    {
        return $this->Image;
    }

    public function setImage($Image): self
    {
        $this->Image = $Image;

        return $this;
    }
}
