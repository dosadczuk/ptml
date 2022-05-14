<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAccesskey
{
    /**
     * Keyboard shortcut to activate or add focus to the element.
     */
    public function withAccesskey(string $value): static
    {
        $this->with(Attr::Accesskey, $value);

        return $this;
    }
    
    public function withoutAccesskey(): static
    {
        $this->without(Attr::Accesskey);
        
        return $this;
    }
} 
