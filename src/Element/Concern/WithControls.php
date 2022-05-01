<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithControls
{
    /**
     * Indicates whether the browser should show playback controls to the user.
     */
    public function controls(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Controls, $value);
        
        return $this;
    }
} 
