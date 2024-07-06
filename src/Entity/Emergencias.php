<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\EmergenciasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmergenciasRepository::class)]
#[ApiResource]
class Emergencias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $usuario_id = null;

    #[ORM\Column(length: 255)]
    private ?string $ubicacion = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 255)]
    private ?string $estado = null;

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

    public function getUbicacion(): ?string
    {
        return $this->ubicacion;
    }

    public function setUbicacion(string $ubicacion): static
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): static
    {
        $this->estado = $estado;

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
