<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithClass
{
    /**
     * Often used with CSS to style elements with common properties.
     */
    public function withClass(string|array $value): static
    {
        $this->with(Attr::Clazz, $value);

        return $this;
    }
    
    public function withoutClass(): static
    {
        $this->without(Attr::Clazz);
        
        return $this;
    }
} 
