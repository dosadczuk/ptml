<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithPreload
{
    /**
     * Specifies if and how the author thinks the audio/video should be loaded when the page loads.
     */
    public function preload(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Preload, $value);
        
        return $this;
    }
}
