<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithContenteditable
{
    /**
     * Indicates whether the element's content is editable.
     */
    public function contenteditable(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Contenteditable, $value);
        
        return $this;
    }
} 
