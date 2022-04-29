<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOninput
{
    /**
     * Script to be run when the element gets user input.
     */
    public function oninput(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Oninput, $value);
        
        return $this;
    }
}
