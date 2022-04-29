<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnseeked
{
    /**
     * Script to be run when the seeking attribute is set to false indicating that seeking has ended.
     */
    public function onseeked(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onseeked, $value);
        
        return $this;
    }
}
