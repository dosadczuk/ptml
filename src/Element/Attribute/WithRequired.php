<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithRequired
{
    /**
     * Specifies that the element must be filled out before submitting the form.
     */
    public function required(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Required, $value);
        
        return $this;
    }
}
