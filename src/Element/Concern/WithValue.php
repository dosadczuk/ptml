<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithValue
{
    /**
     * Defines a default value which will be displayed in the element on page
     * load.
     */
    public function withValue(string $value): static
    {
        $this->with(Attr::Value, $value);

        return $this;
    }
    
    public function withoutValue(): static
    {
        $this->without(Attr::Value);
        
        return $this;
    }
} 
