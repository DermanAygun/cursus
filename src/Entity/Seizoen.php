<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeizoenRepository")
 */
class Seizoen
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="date")
     */
    private $beginDatum;

    /**
     * @ORM\Column(type="date")
     */
    private $eindDate;

    /**
     * @ORM\Column(type="float")
     */
    private $korting;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getBeginDatum(): ?\DateTimeInterface
    {
        return $this->beginDatum;
    }

    public function setBeginDatum(\DateTimeInterface $beginDatum): self
    {
        $this->beginDatum = $beginDatum;

        return $this;
    }

    public function getEindDate(): ?\DateTimeInterface
    {
        return $this->eindDate;
    }

    public function setEindDate(\DateTimeInterface $eindDate): self
    {
        $this->eindDate = $eindDate;

        return $this;
    }

    public function getKorting(): ?float
    {
        return $this->korting;
    }

    public function setKorting(float $korting): self
    {
        $this->korting = $korting;

        return $this;
    }
}
