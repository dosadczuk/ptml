<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOndragstart
{
    /**
     * Script to be run at the start of a drag operation.
     */
    public function ondragstart(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ondragstart, $value);
        
        return $this;
    }
}
