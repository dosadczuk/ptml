<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithIntegrity
{
    /**
     * Specifies a Subresource Integrity value that allows browsers to verify
     * what they fetch.
     */
    public function integrity(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Integrity, $value);
        
        return $this;
    }
} 
