<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnloadstart
{
    /**
     * Script to be run just as the file begins to load before anything is actually loaded.
     */
    public function onloadstart(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onloadstart, $value);
        
        return $this;
    }
}
