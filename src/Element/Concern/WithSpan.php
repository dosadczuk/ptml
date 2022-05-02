<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSpan
{
    /**
     * Specifies the number of columns to span.
     */
    public function withSpan(string $value, bool $append = true): static
    {
        $this->with(Attr::Span, $value, $append);

        return $this;
    }
    
    public function withoutSpan(): static
    {
        $this->without(Attr::Span);
        
        return $this;
    }
} 
