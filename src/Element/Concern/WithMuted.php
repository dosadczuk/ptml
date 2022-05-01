<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMuted
{
    /**
     * Indicates whether the audio will be initially silenced on page load.
     */
    public function withMuted(string $value, bool $append = false): static
    {
        $this->with(Attr::Muted, $value, $append);

        return $this;
    }
} 
