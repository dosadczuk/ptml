<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithMin
{
    /**
     * Specifies a minimum value.
     */
    public function min(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Min, $value);
        
        return $this;
    }
}
