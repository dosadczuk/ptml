<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithOptimum
{
    /**
     * Indicates the optimal numeric value.
     */
    public function withOptimum(string|int|float $value): static
    {
        $this->with(Attr::Optimum, $value);

        return $this;
    }
    
    public function withoutOptimum(): static
    {
        $this->without(Attr::Optimum);
        
        return $this;
    }
} 
