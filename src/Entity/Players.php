<?php

namespace App\Entity;

use App\Repository\PlayersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayersRepository::class)]
class Players
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Players = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayers(): ?string
    {
        return $this->Players;
    }

    public function setPlayers(string $Players): static
    {
        $this->Players = $Players;

        return $this;
    }
}
