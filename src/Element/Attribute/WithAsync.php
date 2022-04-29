<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithAsync
{
    /**
     * Specifies that the script is executed asynchronously (only for external scripts).
     */
    public function async(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Async, $value);
        
        return $this;
    }
}
