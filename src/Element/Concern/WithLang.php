<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithLang
{
    /**
     * Defines the language used in the element.
     */
    public function withLang(string $value, bool $append = false): static
    {
        $this->with(Attr::Lang, $value, $append);

        return $this;
    }
    
    public function withoutLang(): static
    {
        $this->without(Attr::Lang);
        
        return $this;
    }
} 
