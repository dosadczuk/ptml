<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithStyle
{
    /**
     * Defines CSS styles which will override styles previously set.
     */
    public function withStyle(string|array $value): static
    {
        $this->with(Attr::Style, $value);

        return $this;
    }
    
    public function withoutStyle(): static
    {
        $this->without(Attr::Style);
        
        return $this;
    }
} 
