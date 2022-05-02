<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithHidden
{
    /**
     * Prevents rendering of given element, while keeping child elements, e.g.
     */
    public function withHidden(string $value, bool $append = true): static
    {
        $this->with(Attr::Hidden, $value, $append);

        return $this;
    }
    
    public function withoutHidden(): static
    {
        $this->without(Attr::Hidden);
        
        return $this;
    }
} 
