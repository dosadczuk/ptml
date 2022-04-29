<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithNovalidate
{
    /**
     * Specifies that the form should not be validated when submitted.
     */
    public function novalidate(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Novalidate, $value);
        
        return $this;
    }
}
