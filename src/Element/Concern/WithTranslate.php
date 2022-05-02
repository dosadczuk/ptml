<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithTranslate
{
    /**
     * Specify whether an element's attribute values and the values of its Text
     * node children are to be translated when the page is localized, or
     * whether to leave them unchanged.
     */
    public function withTranslate(string $value, bool $append = true): static
    {
        $this->with(Attr::Translate, $value, $append);

        return $this;
    }
    
    public function withoutTranslate(): static
    {
        $this->without(Attr::Translate);
        
        return $this;
    }
} 
