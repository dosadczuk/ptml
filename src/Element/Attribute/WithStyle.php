<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithStyle
{
    /**
     * Specifies an inline CSS style for an element.
     */
    public function style(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Style, $value);
        
        return $this;
    }
}
