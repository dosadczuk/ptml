<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithAutofocus
{
    /**
     * Specifies that the element should automatically get focus when the page loads.
     */
    public function autofocus(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Autofocus, $value);
        
        return $this;
    }
}
