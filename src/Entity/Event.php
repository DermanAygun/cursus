<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="time")
     */
    private $Start;

    /**
     * @ORM\Column(type="time")
     */
    private $End;

    /**
     * @ORM\Column(type="integer")
     */
    private $Min;

    /**
     * @ORM\Column(type="integer")
     */
    private $Max;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="blob")
     */
    private $Image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->Start;
    }

    public function setStart(\DateTimeInterface $Start): self
    {
        $this->Start = $Start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->End;
    }

    public function setEnd(\DateTimeInterface $End): self
    {
        $this->End = $End;

        return $this;
    }

    public function getMin(): ?int
    {
        return $this->Min;
    }

    public function setMin(int $Min): self
    {
        $this->Min = $Min;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->Max;
    }

    public function setMax(int $Max): self
    {
        $this->Max = $Max;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
