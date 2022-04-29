<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithValue
{
    /**
     * Specifies the value of the element.
     */
    public function value(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Value, $value);
        
        return $this;
    }
}
