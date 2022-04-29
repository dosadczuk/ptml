<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOndblclick
{
    /**
     * Script to be run when the element is being double-clicked.
     */
    public function ondblclick(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ondblclick, $value);
        
        return $this;
    }
}
