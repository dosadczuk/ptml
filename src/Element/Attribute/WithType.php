<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithType
{
    /**
     * Specifies the type of element.
     */
    public function type(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Type, $value);
        
        return $this;
    }
}
