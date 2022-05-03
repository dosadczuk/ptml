<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithLow
{
    /**
     * Indicates the upper bound of the lower range.
     */
    public function withLow(string $value, bool $append = true): static
    {
        $this->with(Attr::Low, $value, $append);

        return $this;
    }
    
    public function withoutLow(): static
    {
        $this->without(Attr::Low);
        
        return $this;
    }
} 
