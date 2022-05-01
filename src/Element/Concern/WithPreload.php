<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithPreload
{
    /**
     * Indicates whether the whole resource, parts of it or nothing should be
     * preloaded.
     */
    public function preload(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Preload, $value);
        
        return $this;
    }
} 
