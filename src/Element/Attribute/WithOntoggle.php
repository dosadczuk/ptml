<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOntoggle
{
    /**
     * Script to be run when the user opens or closes the <details> element.
     */
    public function ontoggle(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ontoggle, $value);
        
        return $this;
    }
}
