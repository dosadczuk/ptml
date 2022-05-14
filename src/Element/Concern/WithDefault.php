<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDefault
{
    /**
     * Indicates that the track should be enabled unless the user's preferences
     * indicate something different.
     */
    public function withDefault(string|bool $value): static
    {
        $this->with(Attr::Default, $value);

        return $this;
    }
    
    public function withoutDefault(): static
    {
        $this->without(Attr::Default);
        
        return $this;
    }
} 
