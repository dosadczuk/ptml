<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithPattern
{
    /**
     * Defines a regular expression which the element's value will be validated
     * against.
     */
    public function withPattern(string $value): static
    {
        $this->with(Attr::Pattern, $value);

        return $this;
    }
    
    public function withoutPattern(): static
    {
        $this->without(Attr::Pattern);
        
        return $this;
    }
} 
