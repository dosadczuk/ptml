<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithForm
{
    /**
     * Indicates the form that is the owner of the element.
     */
    public function form(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Form, $value);
        
        return $this;
    }
} 
