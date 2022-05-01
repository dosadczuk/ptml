<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAllow
{
    /**
     * Specifies a feature-policy for the iframe.
     */
    public function allow(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Allow, $value);
        
        return $this;
    }
} 
