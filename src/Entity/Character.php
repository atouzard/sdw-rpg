<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private string $name;

    #[ORM\Column]
    private int $strength;

    #[ORM\Column]
    private int $constitution;

    public function __construct(string $name, int $strength, int $constitution)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->constitution = $constitution;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function setStrength(int $strength): self
    {
        $this->strength = $strength;
        return $this;
    }

    public function getConstitution(): int
    {
        return $this->constitution;
    }

    public function setConstitution(int $constitution): self
    {
        $this->constitution = $constitution;
        return $this;
    }

    public function getHp(): int
    {
        // TODO: Implement HP calculation
        return 0;
    }

    public function getAttack(): int
    {
        // TODO: Implement Attack calculation
        return 0;
    }

    public function getDefense(): int
    {
        // TODO: Implement Defense calculation
        return 0;
    }
}
