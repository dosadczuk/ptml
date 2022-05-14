<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithLabel
{
    /**
     * Specifies a user-readable title of the element.
     */
    public function withLabel(string $value): static
    {
        $this->with(Attr::Label, $value);

        return $this;
    }
    
    public function withoutLabel(): static
    {
        $this->without(Attr::Label);
        
        return $this;
    }
} 
