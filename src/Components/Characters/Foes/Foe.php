<?php

namespace App\Components\Characters\Foes;

use App\Components\Characters\Character;
use App\Interfaces\ExperienceInterface;

abstract class Foe extends Character implements ExperienceInterface
{

    public const RACE_GOBLIN = 'goblin';
    public const RACE_ORC = 'orc';
    public const RACE_BAT = 'bat';
    public const RACE_SKELETON = 'skeleton';
    public const RACE_ZOMBIE = 'zombie';

    protected string $race;
    protected int $experience;

    public function __construct(string $name, string $race)
    {
        parent::__construct($name, 'Foes');
        $this->setRace($race);
    }


// TODO nom random, stats random
// TODO Foes : bat|zombie|orc|goblin|skeleton
// TODO each Foes override attackTarget(Character $target) => code pour calculer les dégats et l'utilisation de mana
    /**
     * @return string
     */
    public function getRace(): string
    {
        return $this->race;
    }

    /**
     * @param string $race
     * @return Foe
     */
    public function setRace(string $race): Foe
    {
        $this->race = $race;

        return $this;
    }

    /**
     * @return int
     */
    public function getExperience(): int
    {
        return $this->experience;
    }

    /**
     * @param int $experience
     */
    public function setExperience(int $experience): void
    {
        $this->experience = $experience;
    }

    public function addXp(int $experience): void
    {
        if(this->life <= 0)
        $this->experience += $experience;
    }
}