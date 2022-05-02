<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithScope
{
    /**
     * Defines the cells that the header test (defined in the th element)
     * relates to.
     */
    public function withScope(string $value, bool $append = true): static
    {
        $this->with(Attr::Scope, $value, $append);

        return $this;
    }
    
    public function withoutScope(): static
    {
        $this->without(Attr::Scope);
        
        return $this;
    }
} 
