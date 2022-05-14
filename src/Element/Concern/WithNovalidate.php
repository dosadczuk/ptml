<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithNovalidate
{
    /**
     * This attribute indicates that the form shouldn't be validated when
     * submitted.
     */
    public function withNovalidate(string|bool $value): static
    {
        $this->with(Attr::Novalidate, $value);

        return $this;
    }
    
    public function withoutNovalidate(): static
    {
        $this->without(Attr::Novalidate);
        
        return $this;
    }
} 
