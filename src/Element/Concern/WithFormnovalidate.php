<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithFormnovalidate
{
    /**
     * If the button/input is a submit button (type="submit"), this boolean
     * attribute specifies that the form is not to be validated when it is
     * submitted. If this attribute is specified, it overrides the novalidate
     * attribute of the button's form owner.
     */
    public function withFormnovalidate(string $value, bool $append = false): static
    {
        $this->with(Attr::Formnovalidate, $value, $append);

        return $this;
    }
    
    public function withoutFormnovalidate(): static
    {
        $this->without(Attr::Formnovalidate);
        
        return $this;
    }
} 
