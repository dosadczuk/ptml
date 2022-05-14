<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithReadonly
{
    /**
     * Indicates whether the element can be edited.
     */
    public function withReadonly(string|bool $value): static
    {
        $this->with(Attr::Readonly, $value);

        return $this;
    }
    
    public function withoutReadonly(): static
    {
        $this->without(Attr::Readonly);
        
        return $this;
    }
} 
