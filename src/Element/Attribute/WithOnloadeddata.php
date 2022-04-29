<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnloadeddata
{
    /**
     * Script to be run when media data is loaded.
     */
    public function onloadeddata(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onloadeddata, $value);
        
        return $this;
    }
}
