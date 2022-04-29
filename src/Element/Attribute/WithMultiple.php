<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithMultiple
{
    /**
     * Specifies that a user can enter more than one value.
     */
    public function multiple(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Multiple, $value);
        
        return $this;
    }
}
