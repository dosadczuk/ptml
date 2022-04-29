<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnafterprint
{
    /**
     * Script to be run after the document is printed.
     */
    public function onafterprint(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onafterprint, $value);
        
        return $this;
    }
}
