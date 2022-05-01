<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithSrc
{
    /**
     * The URL of the embeddable content.
     */
    public function src(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Src, $value);
        
        return $this;
    }
} 
