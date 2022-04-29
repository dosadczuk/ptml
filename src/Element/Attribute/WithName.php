<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithName
{
    /**
     * Specifies the name of the element.
     */
    public function name(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Name, $value);
        
        return $this;
    }
}
