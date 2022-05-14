<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDecoding
{
    /**
     * Indicates the preferred method to decode the image.
     */
    public function withDecoding(string $value): static
    {
        $this->with(Attr::Decoding, $value);

        return $this;
    }
    
    public function withoutDecoding(): static
    {
        $this->without(Attr::Decoding);
        
        return $this;
    }
} 
