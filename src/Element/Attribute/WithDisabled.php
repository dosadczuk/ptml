<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithDisabled
{
    /**
     * Specifies that the specified element/group of elements should be disabled.
     */
    public function disabled(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Disabled, $value);
        
        return $this;
    }
}
