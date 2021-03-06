<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDraggable
{
    /**
     * Defines whether the element can be dragged.
     */
    public function withDraggable(string $value): static
    {
        $this->with(Attr::Draggable, $value);

        return $this;
    }
    
    public function withoutDraggable(): static
    {
        $this->without(Attr::Draggable);
        
        return $this;
    }
} 
