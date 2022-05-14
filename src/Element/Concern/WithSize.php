<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSize
{
    /**
     * Defines the width of the element (in pixels). If the element's type
     * attribute is text or password then it's the number of characters.
     */
    public function withSize(string|int|float $value): static
    {
        $this->with(Attr::Size, $value);

        return $this;
    }
    
    public function withoutSize(): static
    {
        $this->without(Attr::Size);
        
        return $this;
    }
} 
