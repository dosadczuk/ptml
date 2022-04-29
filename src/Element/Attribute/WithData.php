<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithData
{
    /**
     * Specifies the URL of the resource to be used by the object.
     */
    public function data(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Data, $value);
        
        return $this;
    }
}
