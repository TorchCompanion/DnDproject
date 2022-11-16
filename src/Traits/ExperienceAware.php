<?php

namespace App\Traits;

use App\Components\Characters\Specialities;

trait ExperienceAware
{
    protected int $experienceTotal = 0;
    protected int $experienceLevel = 0;

    public function addXp(int $experience): void
    {
        $this->experienceTotal += $experience;
        $this->experienceLevel = (int)floor($this->experienceTotal/100);
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