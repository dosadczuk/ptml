<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSlot
{
    /**
     * Assigns a slot in a shadow DOM shadow tree to an element.
     */
    public function slot(string $value, bool $append = false): static
    {
        $this->with(Attr::Slot, $value, $append);

        return $this;
    }
} 
