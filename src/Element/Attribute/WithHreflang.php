<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithHreflang
{
    /**
     * Specifies the language of the linked document.
     */
    public function hreflang(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Hreflang, $value);
        
        return $this;
    }
}
