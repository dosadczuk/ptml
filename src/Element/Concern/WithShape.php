<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithShape
{
    /**
     * Specifies the shape of the area.
     */
    public function shape(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Shape, $value);
        
        return $this;
    }
} 
