<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithDraggable
{
    /**
     * Defines whether the element can be dragged.
     */
    public function draggable(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Draggable, $value);
        
        return $this;
    }
} 
