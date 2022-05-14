<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCols
{
    /**
     * Defines the number of columns in a textarea.
     */
    public function withCols(string|int $value): static
    {
        $this->with(Attr::Cols, $value);

        return $this;
    }
    
    public function withoutCols(): static
    {
        $this->without(Attr::Cols);
        
        return $this;
    }
} 
