<?php

namespace App\Components\Items\Shields;

use App\Components\Items\Item;
use App\Interfaces\ExperienceInterface;
use App\Traits\ExperienceAware;

class Shield extends Item implements ExperienceInterface
{
    use ExperienceAware;

    protected string $name;
    protected int $armor;

    public function __construct(
        string $name,
        string $description,
        int    $armor,
    )
    {
        parent::__construct($name, $description, true,
            Item::CAT_SHIELD);
        $this->armor = $armor;
        $this->setExperienceLevelMax(22);
    }

    /**
     * @return int
     */
    public function getArmor(): int
    {
        return $this->armor;
    }

    /**
     * @param int $armor
     * @return Shield
     */
    public function setArmor(int $armor): Shield
    {
        $this->armor = $armor;

        return $this;
    }
}