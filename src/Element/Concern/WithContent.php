<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithContent
{
    /**
     * A value associated with http-equiv or name depending on the context.
     */
    public function withContent(string $value): static
    {
        $this->with(Attr::Content, $value);

        return $this;
    }
    
    public function withoutContent(): static
    {
        $this->without(Attr::Content);
        
        return $this;
    }
} 
