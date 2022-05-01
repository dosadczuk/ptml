<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithMedia
{
    /**
     * Specifies a hint of the media for which the linked resource was designed.
     */
    public function media(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Media, $value);
        
        return $this;
    }
} 
