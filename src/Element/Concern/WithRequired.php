<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRequired
{
    /**
     * Indicates whether this element is required to fill out or not.
     */
    public function withRequired(string $value, bool $append = true): static
    {
        $this->with(Attr::Required, $value, $append);

        return $this;
    }
    
    public function withoutRequired(): static
    {
        $this->without(Attr::Required);
        
        return $this;
    }
} 
