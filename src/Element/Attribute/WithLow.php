<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithLow
{
    /**
     * Specifies the range that is considered to be a low value.
     */
    public function low(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Low, $value);
        
        return $this;
    }
}
