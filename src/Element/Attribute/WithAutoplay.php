<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithAutoplay
{
    /**
     * Specifies that the audio/video will start playing as soon as it is ready.
     */
    public function autoplay(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Autoplay, $value);
        
        return $this;
    }
}
