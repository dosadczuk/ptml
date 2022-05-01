<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithStyle
{
    /**
     * Defines CSS styles which will override styles previously set.
     */
    public function withStyle(string $value, bool $append = false): static
    {
        $this->with(Attr::Style, $value, $append);

        return $this;
    }
    
    public function withoutStyle(): static
    {
        $this->without(Attr::Style);
        
        return $this;
    }
} 
