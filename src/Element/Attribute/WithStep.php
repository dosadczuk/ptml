<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithStep
{
    /**
     * Specifies the legal number intervals for an input field.
     */
    public function step(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Step, $value);
        
        return $this;
    }
}
