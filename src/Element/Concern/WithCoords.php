<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCoords
{
    /**
     * A set of values specifying the coordinates of the hot-spot region.
     */
    public function coords(string $value, bool $append = false): static
    {
        $this->with(Attr::Coords, $value, $append);

        return $this;
    }
} 
