<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithTitle
{
    /**
     * Text to be displayed in a tooltip when hovering over the element.
     */
    public function withTitle(string $value): static
    {
        $this->with(Attr::Title, $value);

        return $this;
    }
    
    public function withoutTitle(): static
    {
        $this->without(Attr::Title);
        
        return $this;
    }
} 
