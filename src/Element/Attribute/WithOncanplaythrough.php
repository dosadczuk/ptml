<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOncanplaythrough
{
    /**
     * Script to be run when a file can be played all the way to the end without pausing for buffering.
     */
    public function oncanplaythrough(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Oncanplaythrough, $value);
        
        return $this;
    }
}
