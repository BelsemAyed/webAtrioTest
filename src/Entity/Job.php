<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobRepository::class)]
class Job
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $companyName = null;

    #[ORM\Column(length: 255)]
    private ?string $jobPosition = null;

    #[ORM\ManyToOne(inversedBy: 'jobs')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): static
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getJobPosition(): ?string
    {
        return $this->jobPosition;
    }

    public function setJobPosition(string $jobPosition): static
    {
        $this->jobPosition = $jobPosition;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
