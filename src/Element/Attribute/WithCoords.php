<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithCoords
{
    /**
     * Specifies the coordinates of the area.
     */
    public function coords(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Coords, $value);
        
        return $this;
    }
}
