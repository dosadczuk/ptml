<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithFormenctype
{
    /**
     * If the button/input is a submit button (type="submit"), this attribute
     * sets the encoding type to use during form submission. If this attribute
     * is specified, it overrides the enctype attribute of the button's form
     * owner.
     */
    public function formenctype(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Formenctype, $value);
        
        return $this;
    }
} 