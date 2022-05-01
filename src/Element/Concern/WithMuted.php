<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithMuted
{
    /**
     * Indicates whether the audio will be initially silenced on page load.
     */
    public function muted(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Muted, $value);
        
        return $this;
    }
} 
