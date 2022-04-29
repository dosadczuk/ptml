<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnmousewheel
{
    /**
     * Script to be run when a mouse wheel is being scrolled over an element.
     */
    public function onmousewheel(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onmousewheel, $value);
        
        return $this;
    }
}
