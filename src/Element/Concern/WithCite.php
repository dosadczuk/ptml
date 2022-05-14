<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCite
{
    /**
     * Contains a URI which points to the source of the quote or change.
     */
    public function withCite(string $value): static
    {
        $this->with(Attr::Cite, $value);

        return $this;
    }
    
    public function withoutCite(): static
    {
        $this->without(Attr::Cite);
        
        return $this;
    }
} 
