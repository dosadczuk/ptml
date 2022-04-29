<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnblur
{
    /**
     * Script to be run when the element loses focus.
     */
    public function onblur(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onblur, $value);
        
        return $this;
    }
}
