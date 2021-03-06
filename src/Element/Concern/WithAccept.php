<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAccept
{
    /**
     * List of types the server accepts, typically a file type.
     */
    public function withAccept(string|array $value): static
    {
        $this->with(Attr::Accept, $value);

        return $this;
    }
    
    public function withoutAccept(): static
    {
        $this->without(Attr::Accept);
        
        return $this;
    }
} 
