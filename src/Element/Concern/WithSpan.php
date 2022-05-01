<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSpan
{
    /**
     * Specifies the number of columns to span.
     */
    public function span(string $value, bool $append = false): static
    {
        $this->with(Attr::Span, $value, $append);

        return $this;
    }
} 
