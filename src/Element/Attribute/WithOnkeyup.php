<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnkeyup
{
    /**
     * Script to be run when a user releases a key.
     */
    public function onkeyup(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onkeyup, $value);
        
        return $this;
    }
}
