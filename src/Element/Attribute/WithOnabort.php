<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnabort
{
    /**
     * Script to be run on abort.
     */
    public function onabort(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onabort, $value);
        
        return $this;
    }
}
