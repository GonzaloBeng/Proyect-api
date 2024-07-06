<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AlertasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlertasRepository::class)]
#[ApiResource]
class Alertas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $usuario_id = null;

    #[ORM\Column(length: 255)]
    private ?string $tipo_alerta = null;

    #[ORM\Column(length: 255)]
    private ?string $mensaje = null;

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

    public function getTipoAlerta(): ?string
    {
        return $this->tipo_alerta;
    }

    public function setTipoAlerta(string $tipo_alerta): static
    {
        $this->tipo_alerta = $tipo_alerta;

        return $this;
    }

    public function getMensaje(): ?string
    {
        return $this->mensaje;
    }

    public function setMensaje(string $mensaje): static
    {
        $this->mensaje = $mensaje;

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
