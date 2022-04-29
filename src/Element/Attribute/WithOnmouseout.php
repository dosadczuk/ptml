<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnmouseout
{
    /**
     * Script to be run when a mouse pointer moves out of an element.
     */
    public function onmouseout(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onmouseout, $value);
        
        return $this;
    }
}
