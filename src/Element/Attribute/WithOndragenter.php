<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOndragenter
{
    /**
     * Script to be run when an element has been dragged to a valid drop target.
     */
    public function ondragenter(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ondragenter, $value);
        
        return $this;
    }
}
