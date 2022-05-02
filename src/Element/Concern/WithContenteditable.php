<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithContenteditable
{
    /**
     * Indicates whether the element's content is editable.
     */
    public function withContenteditable(string $value, bool $append = true): static
    {
        $this->with(Attr::Contenteditable, $value, $append);

        return $this;
    }
    
    public function withoutContenteditable(): static
    {
        $this->without(Attr::Contenteditable);
        
        return $this;
    }
} 
