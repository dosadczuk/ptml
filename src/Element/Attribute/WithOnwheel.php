<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnwheel
{
    /**
     * Script to be run when the mouse wheel rolls up or down over an element.
     */
    public function onwheel(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onwheel, $value);
        
        return $this;
    }
}
