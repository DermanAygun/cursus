<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BetaalRepository")
 */
class Betaal
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
    private $eindDatum;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reservering")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reserverind_id;

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

    public function getEindDatum(): ?\DateTimeInterface
    {
        return $this->eindDatum;
    }

    public function setEindDatum(\DateTimeInterface $eindDatum): self
    {
        $this->eindDatum = $eindDatum;

        return $this;
    }

    public function getReserverindId(): ?reservering
    {
        return $this->reserverind_id;
    }

    public function setReserverindId(?reservering $reserverind_id): self
    {
        $this->reserverind_id = $reserverind_id;

        return $this;
    }
}
