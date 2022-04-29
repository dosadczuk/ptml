<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnscroll
{
    /**
     * Script to be run when an element's scrollbar is being scrolled.
     */
    public function onscroll(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onscroll, $value);
        
        return $this;
    }
}
