<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithColspan
{
    /**
     * The colspan attribute defines the number of columns a cell should span.
     */
    public function withColspan(string $value, bool $append = true): static
    {
        $this->with(Attr::Colspan, $value, $append);

        return $this;
    }
    
    public function withoutColspan(): static
    {
        $this->without(Attr::Colspan);
        
        return $this;
    }
} 
