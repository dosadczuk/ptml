<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithContenteditable
{
    /**
     * Specifies whether the content of an element is editable or not.
     */
    public function contenteditable(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Contenteditable, $value);
        
        return $this;
    }
}
