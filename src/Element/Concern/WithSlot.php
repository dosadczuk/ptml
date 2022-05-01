<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithSlot
{
    /**
     * Assigns a slot in a shadow DOM shadow tree to an element.
     */
    public function slot(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Slot, $value);
        
        return $this;
    }
} 
