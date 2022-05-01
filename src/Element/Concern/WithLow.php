<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithLow
{
    /**
     * Indicates the upper bound of the lower range.
     */
    public function low(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Low, $value);
        
        return $this;
    }
} 
