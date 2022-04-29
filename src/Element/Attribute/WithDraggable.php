<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithDraggable
{
    /**
     * Specifies whether an element is draggable or not.
     */
    public function draggable(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Draggable, $value);
        
        return $this;
    }
}
