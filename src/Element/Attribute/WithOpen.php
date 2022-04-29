<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOpen
{
    /**
     * Specifies that the details should be visible (open) to the user.
     */
    public function open(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Open, $value);
        
        return $this;
    }
}
