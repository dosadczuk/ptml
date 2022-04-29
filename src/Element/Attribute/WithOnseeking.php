<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnseeking
{
    /**
     * Script to be run when the seeking attribute is set to true indicating that seeking is active.
     */
    public function onseeking(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onseeking, $value);
        
        return $this;
    }
}
