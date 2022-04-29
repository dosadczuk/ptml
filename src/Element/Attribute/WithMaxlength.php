<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithMaxlength
{
    /**
     * Specifies the maximum number of characters allowed in an element.
     */
    public function maxlength(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Maxlength, $value);
        
        return $this;
    }
}
