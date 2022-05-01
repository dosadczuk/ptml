<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithHreflang
{
    /**
     * Specifies the language of the linked resource.
     */
    public function hreflang(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Hreflang, $value);
        
        return $this;
    }
} 
