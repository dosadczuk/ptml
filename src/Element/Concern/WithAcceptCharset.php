<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAcceptCharset
{
    /**
     * List of supported charsets.
     */
    public function acceptCharset(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::AcceptCharset, $value);
        
        return $this;
    }
} 
