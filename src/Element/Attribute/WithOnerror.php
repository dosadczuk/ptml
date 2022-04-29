<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnerror
{
    /**
     * Script to be run when an error occurs.
     */
    public function onerror(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onerror, $value);
        
        return $this;
    }
}
