<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnchange
{
    /**
     * Script to be run when the value of the element is changed.
     */
    public function onchange(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onchange, $value);
        
        return $this;
    }
}
