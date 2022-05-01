<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithOpen
{
    /**
     * Indicates whether the contents are currently visible (in the case of a
     * <details> element) or whether the dialog is active and can be interacted
     * with (in the case of a <dialog> element).
     */
    public function open(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Open, $value);
        
        return $this;
    }
} 
