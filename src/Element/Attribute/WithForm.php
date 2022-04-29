<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithForm
{
    /**
     * Specifies the name of the form the element belongs to.
     */
    public function form(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Form, $value);
        
        return $this;
    }
}
