<?php

namespace App\Entity;

use App\Repository\WeekRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeekRepository::class)]
class Week
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(targetEntity: Game::class, mappedBy: 'week')]
    private Collection $game_week;

    #[ORM\ManyToOne(inversedBy: 'weeks')]
    #[ORM\JoinColumn(nullable: false)]
    private ?League $league = null;

    public function __construct()
    {
        $this->game_week = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Game>
     */
    public function getGameWeek(): Collection
    {
        return $this->game_week;
    }

    public function addGameWeek(Game $gameWeek): static
    {
        if (!$this->game_week->contains($gameWeek)) {
            $this->game_week->add($gameWeek);
            $gameWeek->setWeek($this);
        }

        return $this;
    }

    public function removeGameWeek(Game $gameWeek): static
    {
        if ($this->game_week->removeElement($gameWeek)) {
            // set the owning side to null (unless already changed)
            if ($gameWeek->getWeek() === $this) {
                $gameWeek->setWeek(null);
            }
        }

        return $this;
    }

    public function getLeagueId(): ?League
    {
        return $this->league;
    }

    public function setLeagueId(?League $league): static
    {
        $this->league = $league;

        return $this;
    }
}
