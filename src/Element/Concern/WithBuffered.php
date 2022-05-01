<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithBuffered
{
    /**
     * Contains the time range of already buffered media.
     */
    public function withBuffered(string $value, bool $append = false): static
    {
        $this->with(Attr::Buffered, $value, $append);

        return $this;
    }
    
    public function withoutBuffered(): static
    {
        $this->without(Attr::Buffered);
        
        return $this;
    }
} 
