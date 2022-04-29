<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnmousedown
{
    /**
     * Script to be run when a mouse button is pressed down on an element.
     */
    public function onmousedown(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onmousedown, $value);
        
        return $this;
    }
}
