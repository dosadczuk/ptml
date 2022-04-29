<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithMinlength
{
    /**
     * Specifies the minimum number of characters allowed in an element.
     */
    public function minlength(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Minlength, $value);
        
        return $this;
    }
}
