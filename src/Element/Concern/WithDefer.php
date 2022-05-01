<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithDefer
{
    /**
     * Indicates that the script should be executed after the page has been
     * parsed.
     */
    public function defer(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Defer, $value);
        
        return $this;
    }
} 
