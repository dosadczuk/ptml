<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMin
{
    /**
     * Indicates the minimum value allowed.
     */
    public function withMin(string|int|float|\DateTimeInterface $value): static
    {
        $this->with(Attr::Min, $value);

        return $this;
    }
    
    public function withoutMin(): static
    {
        $this->without(Attr::Min);
        
        return $this;
    }
} 
