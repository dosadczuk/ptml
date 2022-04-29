<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithMuted
{
    /**
     * Specifies that the audio output of the video should be muted.
     */
    public function muted(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Muted, $value);
        
        return $this;
    }
}
