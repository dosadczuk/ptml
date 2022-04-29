<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnsubmit
{
    /**
     * Script to be run when a form is submitted.
     */
    public function onsubmit(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onsubmit, $value);
        
        return $this;
    }
}
