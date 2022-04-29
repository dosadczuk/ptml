<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOncut
{
    /**
     * Script to be run when the content of the element is being cut.
     */
    public function oncut(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Oncut, $value);
        
        return $this;
    }
}
