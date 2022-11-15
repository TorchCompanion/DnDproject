<?php

namespace App\Interfaces;

interface ExperienceInterface
{
    public function addXp(int $experience): void;

    public function getXp(): int;

    public function getLevel(): int;
}