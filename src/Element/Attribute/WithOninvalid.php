<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOninvalid
{
    /**
     * Script to be run when the element is invalid.
     */
    public function oninvalid(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Oninvalid, $value);
        
        return $this;
    }
}
