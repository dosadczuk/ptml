<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithFormtarget
{
    /**
     * If the button/input is a submit button (type="submit"), this attribute
     * specifies the browsing context (for example, tab, window, or inline
     * frame) in which to display the response that is received after
     * submitting the form. If this attribute is specified, it overrides the
     * target attribute of the button's form owner.
     */
    public function formtarget(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Formtarget, $value);
        
        return $this;
    }
} 
