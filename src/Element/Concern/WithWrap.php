<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithWrap
{
    /**
     * Indicates whether the text should be wrapped.
     */
    public function wrap(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Wrap, $value);
        
        return $this;
    }
} 
