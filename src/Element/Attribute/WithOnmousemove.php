<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnmousemove
{
    /**
     * Script to be run as long as the  mouse pointer is moving over an element.
     */
    public function onmousemove(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onmousemove, $value);
        
        return $this;
    }
}
