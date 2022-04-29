<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithAlt
{
    /**
     * Specifies an alternate text when the original element fails to display.
     */
    public function alt(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Alt, $value);
        
        return $this;
    }
}
