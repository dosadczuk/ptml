<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDecoding
{
    /**
     * Indicates the preferred method to decode the image.
     */
    public function withDecoding(string $value, bool $append = false): static
    {
        $this->with(Attr::Decoding, $value, $append);

        return $this;
    }
    
    public function withoutDecoding(): static
    {
        $this->without(Attr::Decoding);
        
        return $this;
    }
} 
