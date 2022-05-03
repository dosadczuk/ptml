<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAcceptCharset
{
    /**
     * List of supported charsets.
     */
    public function withAcceptCharset(string $value, bool $append = true): static
    {
        $this->with(Attr::AcceptCharset, $value, $append);

        return $this;
    }
    
    public function withoutAcceptCharset(): static
    {
        $this->without(Attr::AcceptCharset);
        
        return $this;
    }
} 
