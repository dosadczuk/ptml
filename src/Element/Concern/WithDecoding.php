<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithDecoding
{
    /**
     * Indicates the preferred method to decode the image.
     */
    public function decoding(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Decoding, $value);
        
        return $this;
    }
} 
