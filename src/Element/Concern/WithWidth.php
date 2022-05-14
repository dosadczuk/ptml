<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithWidth
{
    /**
     * For the elements listed here, this establishes the element's width.
     */
    public function withWidth(string|int|float $value): static
    {
        $this->with(Attr::Width, $value);

        return $this;
    }
    
    public function withoutWidth(): static
    {
        $this->without(Attr::Width);
        
        return $this;
    }
} 
