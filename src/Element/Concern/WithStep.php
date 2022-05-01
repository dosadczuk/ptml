<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithStep
{
    /**
     * Specifies the legal number intervals for an input field.
     */
    public function withStep(string $value, bool $append = false): static
    {
        $this->with(Attr::Step, $value, $append);

        return $this;
    }
    
    public function withoutStep(): static
    {
        $this->without(Attr::Step);
        
        return $this;
    }
} 
