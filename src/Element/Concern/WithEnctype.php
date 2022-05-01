<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithEnctype
{
    /**
     * Defines the content type of the form data when the method is POST.
     */
    public function enctype(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Enctype, $value);
        
        return $this;
    }
} 
