<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithPattern
{
    /**
     * Specifies a regular expression that an <input> element's value is checked against.
     */
    public function pattern(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Pattern, $value);
        
        return $this;
    }
}
