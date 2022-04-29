<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnsuspend
{
    /**
     * Script to be run when fetching the media data is stopped before it is completely loaded for whatever reason.
     */
    public function onsuspend(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onsuspend, $value);
        
        return $this;
    }
}
