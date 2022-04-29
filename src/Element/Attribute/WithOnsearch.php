<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnsearch
{
    /**
     * Script to be run when the user writes something in a search field (for <input="search">).
     */
    public function onsearch(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onsearch, $value);
        
        return $this;
    }
}
