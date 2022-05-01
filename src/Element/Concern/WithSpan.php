<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithSpan
{
    /**
     * Specifies the number of columns to span.
     */
    public function span(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Span, $value);
        
        return $this;
    }
} 
