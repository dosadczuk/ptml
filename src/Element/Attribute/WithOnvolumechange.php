<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnvolumechange
{
    /**
     * Script to be run each time the volume of a video/audio has been changed.
     */
    public function onvolumechange(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onvolumechange, $value);
        
        return $this;
    }
}
