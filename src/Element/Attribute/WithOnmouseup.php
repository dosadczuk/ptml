<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnmouseup
{
    /**
     * Script to be run when a mouse button is released over an element.
     */
    public function onmouseup(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onmouseup, $value);
        
        return $this;
    }
}
