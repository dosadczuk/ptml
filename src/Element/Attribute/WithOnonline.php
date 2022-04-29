<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnonline
{
    /**
     * Script to be run when the browser starts to work online.
     */
    public function ononline(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ononline, $value);
        
        return $this;
    }
}
