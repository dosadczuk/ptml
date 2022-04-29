<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnmouseover
{
    /**
     * Script to be run when a mouse pointer moves over an element.
     */
    public function onmouseover(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onmouseover, $value);
        
        return $this;
    }
}
