<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithMax
{
    /**
     * Specifies the maximum value.
     */
    public function max(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Max, $value);
        
        return $this;
    }
}
