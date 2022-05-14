<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSpan
{
    /**
     * Specifies the number of columns to span.
     */
    public function withSpan(string|int $value): static
    {
        $this->with(Attr::Span, $value);

        return $this;
    }
    
    public function withoutSpan(): static
    {
        $this->without(Attr::Span);
        
        return $this;
    }
} 
