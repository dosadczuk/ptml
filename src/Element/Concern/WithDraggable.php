<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDraggable
{
    /**
     * Defines whether the element can be dragged.
     */
    public function draggable(string $value, bool $append = false): static
    {
        $this->with(Attr::Draggable, $value, $append);

        return $this;
    }
} 
