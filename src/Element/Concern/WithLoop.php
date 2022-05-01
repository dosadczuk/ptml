<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithLoop
{
    /**
     * Indicates whether the media should start playing from the start when
     * it's finished.
     */
    public function loop(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Loop, $value);
        
        return $this;
    }
} 
