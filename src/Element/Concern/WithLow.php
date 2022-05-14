<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithLow
{
    /**
     * Indicates the upper bound of the lower range.
     */
    public function withLow(string|int|float $value): static
    {
        $this->with(Attr::Low, $value);

        return $this;
    }
    
    public function withoutLow(): static
    {
        $this->without(Attr::Low);
        
        return $this;
    }
} 
