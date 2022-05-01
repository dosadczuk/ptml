<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAutofocus
{
    /**
     * The element should be automatically focused after the page loaded.
     */
    public function autofocus(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Autofocus, $value);
        
        return $this;
    }
} 
