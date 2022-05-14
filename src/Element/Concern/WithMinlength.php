<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMinlength
{
    /**
     * Defines the minimum number of characters allowed in the element.
     */
    public function withMinlength(string|int $value): static
    {
        $this->with(Attr::Minlength, $value);

        return $this;
    }
    
    public function withoutMinlength(): static
    {
        $this->without(Attr::Minlength);
        
        return $this;
    }
} 
