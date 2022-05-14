<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMax
{
    /**
     * Indicates the maximum value allowed.
     */
    public function withMax(string|int|float|\DateTimeInterface $value): static
    {
        $this->with(Attr::Max, $value);

        return $this;
    }
    
    public function withoutMax(): static
    {
        $this->without(Attr::Max);
        
        return $this;
    }
} 
