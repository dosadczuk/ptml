<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithKind
{
    /**
     * Specifies the kind of text track.
     */
    public function kind(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Kind, $value);
        
        return $this;
    }
} 
