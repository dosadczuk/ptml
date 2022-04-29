<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithMethod
{
    /**
     * Specifies the HTTP method to use when sending form-data.
     */
    public function method(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Method, $value);
        
        return $this;
    }
}
