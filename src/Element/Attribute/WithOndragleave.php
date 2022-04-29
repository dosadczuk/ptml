<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOndragleave
{
    /**
     * Script to be run when an element leaves a valid drop target.
     */
    public function ondragleave(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ondragleave, $value);
        
        return $this;
    }
}
