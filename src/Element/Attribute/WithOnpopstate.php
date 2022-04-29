<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnpopstate
{
    /**
     * Script to be run when the window's history changes..
     */
    public function onpopstate(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onpopstate, $value);
        
        return $this;
    }
}
