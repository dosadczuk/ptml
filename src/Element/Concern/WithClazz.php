<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithClazz
{
    /**
     * Often used with CSS to style elements with common properties.
     */
    public function withClazz(string $value, bool $append = true): static
    {
        $this->with(Attr::Clazz, $value, $append);

        return $this;
    }
    
    public function withoutClazz(): static
    {
        $this->without(Attr::Clazz);
        
        return $this;
    }
} 
