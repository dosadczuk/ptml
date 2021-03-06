<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithHigh
{
    /**
     * Indicates the lower bound of the upper range.
     */
    public function withHigh(string|int|float $value): static
    {
        $this->with(Attr::High, $value);

        return $this;
    }
    
    public function withoutHigh(): static
    {
        $this->without(Attr::High);
        
        return $this;
    }
} 
