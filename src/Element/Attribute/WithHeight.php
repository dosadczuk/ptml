<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithHeight
{
    /**
     * Specifies the height of the element.
     */
    public function height(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Height, $value);
        
        return $this;
    }
}
