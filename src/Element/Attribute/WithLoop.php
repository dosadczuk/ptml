<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithLoop
{
    /**
     * Specifies that the audio/video will start over again, every time it is finished.
     */
    public function loop(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Loop, $value);
        
        return $this;
    }
}
