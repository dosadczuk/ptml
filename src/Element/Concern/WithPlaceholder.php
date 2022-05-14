<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithPlaceholder
{
    /**
     * Provides a hint to the user of what can be entered in the field.
     */
    public function withPlaceholder(string $value): static
    {
        $this->with(Attr::Placeholder, $value);

        return $this;
    }
    
    public function withoutPlaceholder(): static
    {
        $this->without(Attr::Placeholder);
        
        return $this;
    }
} 
