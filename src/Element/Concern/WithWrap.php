<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithWrap
{
    /**
     * Indicates whether the text should be wrapped.
     */
    public function withWrap(string|bool $value): static
    {
        $this->with(Attr::Wrap, $value);

        return $this;
    }
    
    public function withoutWrap(): static
    {
        $this->without(Attr::Wrap);
        
        return $this;
    }
} 
