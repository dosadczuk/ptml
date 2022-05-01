<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithRole
{
    /**
     * Defines an explicit role for an element for use by assistive
     * technologies.
     */
    public function role(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Role, $value);
        
        return $this;
    }
} 
