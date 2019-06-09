<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReserveringRepository")
 */
class Reservering
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Kamer")
     */
    private $kamer_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $user_id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $checkinDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $checkoutDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKamerId(): ?kamer
    {
        return $this->kamer_id;
    }

    public function setKamerId(?kamer $kamer_id): self
    {
        $this->kamer_id = $kamer_id;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getCheckinDate(): ?\DateTimeInterface
    {
        return $this->checkinDate;
    }

    public function setCheckinDate(?\DateTimeInterface $checkinDate): self
    {
        $this->checkinDate = $checkinDate;

        return $this;
    }

    public function getCheckoutDate(): ?\DateTimeInterface
    {
        return $this->checkoutDate;
    }

    public function setCheckoutDate(?\DateTimeInterface $checkoutDate): self
    {
        $this->checkoutDate = $checkoutDate;

        return $this;
    }
}
