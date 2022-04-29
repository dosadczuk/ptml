<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithControls
{
    /**
     * Specifies that audio/video controls should be displayed (such as a play/pause button etc).
     */
    public function controls(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Controls, $value);
        
        return $this;
    }
}
