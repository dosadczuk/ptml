<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithCoords
{
    /**
     * A set of values specifying the coordinates of the hot-spot region.
     */
    public function coords(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Coords, $value);
        
        return $this;
    }
} 
