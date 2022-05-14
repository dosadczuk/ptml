<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithType
{
    /**
     * Defines the type of the element.
     */
    public function withType(string $value): static
    {
        $this->with(Attr::Type, $value);

        return $this;
    }
    
    public function withoutType(): static
    {
        $this->without(Attr::Type);
        
        return $this;
    }
} 
