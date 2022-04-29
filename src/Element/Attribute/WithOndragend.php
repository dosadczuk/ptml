<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOndragend
{
    /**
     * Script to be run at the end of a drag operation.
     */
    public function ondragend(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ondragend, $value);
        
        return $this;
    }
}
