<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithCharset
{
    /**
     * Declares the character encoding of the page or script.
     */
    public function charset(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Charset, $value);
        
        return $this;
    }
} 
