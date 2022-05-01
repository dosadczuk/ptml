<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAutoplay
{
    /**
     * The audio or video should play as soon as possible.
     */
    public function autoplay(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Autoplay, $value);
        
        return $this;
    }
} 
