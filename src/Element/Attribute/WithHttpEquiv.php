<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithHttpEquiv
{
    /**
     * Provides an HTTP header for the information/value of the content attribute.
     */
    public function httpEquiv(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::HttpEquiv, $value);
        
        return $this;
    }
}
