<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnfocus
{
    /**
     * Script to be run when the element gets focus.
     */
    public function onfocus(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onfocus, $value);
        
        return $this;
    }
}
