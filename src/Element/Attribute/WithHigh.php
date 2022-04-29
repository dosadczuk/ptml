<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithHigh
{
    /**
     * Specifies the range that is considered to be a high value.
     */
    public function high(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::High, $value);
        
        return $this;
    }
}
