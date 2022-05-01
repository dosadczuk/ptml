<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithNovalidate
{
    /**
     * This attribute indicates that the form shouldn't be validated when
     * submitted.
     */
    public function novalidate(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Novalidate, $value);
        
        return $this;
    }
} 
