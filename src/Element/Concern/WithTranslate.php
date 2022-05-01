<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithTranslate
{
    /**
     * Specify whether an element's attribute values and the values of its Text
     * node children are to be translated when the page is localized, or
     * whether to leave them unchanged.
     */
    public function translate(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Translate, $value);
        
        return $this;
    }
} 
