<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\HistorialMedicoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistorialMedicoRepository::class)]
#[ApiResource]
class HistorialMedico
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $usuario_id = null;

    #[ORM\Column(length: 255)]
    private ?string $detalles = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuarioId(): ?int
    {
        return $this->usuario_id;
    }

    public function setUsuarioId(int $usuario_id): static
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    public function getDetalles(): ?string
    {
        return $this->detalles;
    }

    public function setDetalles(string $detalles): static
    {
        $this->detalles = $detalles;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }
}
