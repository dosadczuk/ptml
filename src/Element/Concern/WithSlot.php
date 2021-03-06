<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSlot
{
    /**
     * Assigns a slot in a shadow DOM shadow tree to an element.
     */
    public function withSlot(string $value): static
    {
        $this->with(Attr::Slot, $value);

        return $this;
    }
    
    public function withoutSlot(): static
    {
        $this->without(Attr::Slot);
        
        return $this;
    }
} 
