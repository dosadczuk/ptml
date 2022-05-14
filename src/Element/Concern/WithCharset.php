<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCharset
{
    /**
     * Declares the character encoding of the page or script.
     */
    public function withCharset(string $value): static
    {
        $this->with(Attr::Charset, $value);

        return $this;
    }
    
    public function withoutCharset(): static
    {
        $this->without(Attr::Charset);
        
        return $this;
    }
} 
