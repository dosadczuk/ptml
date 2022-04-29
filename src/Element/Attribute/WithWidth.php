<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithWidth
{
    /**
     * Specifies the width of the element.
     */
    public function width(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Width, $value);
        
        return $this;
    }
}
