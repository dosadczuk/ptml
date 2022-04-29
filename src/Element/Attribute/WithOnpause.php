<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnpause
{
    /**
     * Script to be run when the media is paused either by the user or programmatically.
     */
    public function onpause(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onpause, $value);
        
        return $this;
    }
}
