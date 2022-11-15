<?php

namespace App\Traits;

use App\Components\Characters\Specialities;

trait ExperienceAware
{
    protected int $experienceTotal;
    protected int $experienceLevel;

    public function addXp(int $experience): void
    {
        $this->experienceTotal += $experience;
    }

    public function getXp(): int
    {
        return $this->experienceTotal;
    }

    public function getLevel(): int
    {
        return $this->experienceLevel;
    }
}