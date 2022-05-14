<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithLoop
{
    /**
     * Indicates whether the media should start playing from the start when
     * it's finished.
     */
    public function withLoop(string|bool $value): static
    {
        $this->with(Attr::Loop, $value);

        return $this;
    }
    
    public function withoutLoop(): static
    {
        $this->without(Attr::Loop);
        
        return $this;
    }
} 
