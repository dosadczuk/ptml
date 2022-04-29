<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithSelected
{
    /**
     * Specifies that an option should be pre-selected when the page loads.
     */
    public function selected(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Selected, $value);
        
        return $this;
    }
}
