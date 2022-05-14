<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithStep
{
    /**
     * Specifies the legal number intervals for an input field.
     */
    public function withStep(string|int|float $value): static
    {
        $this->with(Attr::Step, $value);

        return $this;
    }
    
    public function withoutStep(): static
    {
        $this->without(Attr::Step);
        
        return $this;
    }
} 
