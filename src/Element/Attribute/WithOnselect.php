<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnselect
{
    /**
     * Script to be run when the element gets selected.
     */
    public function onselect(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onselect, $value);
        
        return $this;
    }
}
