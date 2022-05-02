<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAlign
{
    /**
     * Specifies the horizontal alignment of the element.
     */
    public function withAlign(string $value, bool $append = true): static
    {
        $this->with(Attr::Align, $value, $append);

        return $this;
    }
    
    public function withoutAlign(): static
    {
        $this->without(Attr::Align);
        
        return $this;
    }
} 
