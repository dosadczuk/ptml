<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCoords
{
    /**
     * A set of values specifying the coordinates of the hot-spot region.
     */
    public function withCoords(string|array $value): static
    {
        $this->with(Attr::Coords, $value);

        return $this;
    }
    
    public function withoutCoords(): static
    {
        $this->without(Attr::Coords);
        
        return $this;
    }
} 
