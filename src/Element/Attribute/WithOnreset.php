<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnreset
{
    /**
     * Script to be run when a reset button in a form is clicked..
     */
    public function onreset(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onreset, $value);
        
        return $this;
    }
}
