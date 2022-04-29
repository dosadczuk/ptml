<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnloadedmetadata
{
    /**
     * Script to be run when metadata (like dimensions and duration) are loaded.
     */
    public function onloadedmetadata(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onloadedmetadata, $value);
        
        return $this;
    }
}
