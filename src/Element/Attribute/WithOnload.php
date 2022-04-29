<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnload
{
    /**
     * Script to be run when the element is finished loading.
     */
    public function onload(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onload, $value);
        
        return $this;
    }
}
