<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithTabindex
{
    /**
     * Specifies the tabbing order of an element.
     */
    public function tabindex(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Tabindex, $value);
        
        return $this;
    }
}
