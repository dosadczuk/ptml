<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnpagehide
{
    /**
     * Script to be run when a user navigates away from a page.
     */
    public function onpagehide(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onpagehide, $value);
        
        return $this;
    }
}
