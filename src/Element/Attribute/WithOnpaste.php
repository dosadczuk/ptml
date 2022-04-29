<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnpaste
{
    /**
     * Script to be run when the user pastes some content in an element.
     */
    public function onpaste(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onpaste, $value);
        
        return $this;
    }
}
