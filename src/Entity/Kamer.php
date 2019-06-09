<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KamerRepository")
 */
class Kamer
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
    private $prijs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Soort")
     * @ORM\JoinColumn(nullable=false)
     */
    private $soort_id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Extras")
     */
    private $extras_id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Image")
     */
    private $image_id;

    public function __construct()
    {
        $this->extras_id = new ArrayCollection();
        $this->image_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrijs(): ?float
    {
        return $this->prijs;
    }

    public function setPrijs(float $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }

    public function getSoortId(): ?soort
    {
        return $this->soort_id;
    }

    public function setSoortId(?soort $soort_id): self
    {
        $this->soort_id = $soort_id;

        return $this;
    }

    /**
     * @return Collection|extras[]
     */
    public function getExtrasId(): Collection
    {
        return $this->extras_id;
    }

    public function addExtrasId(extras $extrasId): self
    {
        if (!$this->extras_id->contains($extrasId)) {
            $this->extras_id[] = $extrasId;
        }

        return $this;
    }

    public function removeExtrasId(extras $extrasId): self
    {
        if ($this->extras_id->contains($extrasId)) {
            $this->extras_id->removeElement($extrasId);
        }

        return $this;
    }

    /**
     * @return Collection|image[]
     */
    public function getImageId(): Collection
    {
        return $this->image_id;
    }

    public function addImageId(image $imageId): self
    {
        if (!$this->image_id->contains($imageId)) {
            $this->image_id[] = $imageId;
        }

        return $this;
    }

    public function removeImageId(image $imageId): self
    {
        if ($this->image_id->contains($imageId)) {
            $this->image_id->removeElement($imageId);
        }

        return $this;
    }
}
