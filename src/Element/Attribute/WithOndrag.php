<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOndrag
{
    /**
     * Script to be run when the element is being dragged.
     */
    public function ondrag(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ondrag, $value);
        
        return $this;
    }
}
