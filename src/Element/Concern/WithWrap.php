<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithWrap
{
    /**
     * Indicates whether the text should be wrapped.
     */
    public function withWrap(string $value, bool $append = true): static
    {
        $this->with(Attr::Wrap, $value, $append);

        return $this;
    }
    
    public function withoutWrap(): static
    {
        $this->without(Attr::Wrap);
        
        return $this;
    }
} 
