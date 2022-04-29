<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithDefer
{
    /**
     * Specifies that the script is executed when the page has finished parsing (only for external scripts).
     */
    public function defer(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Defer, $value);
        
        return $this;
    }
}
