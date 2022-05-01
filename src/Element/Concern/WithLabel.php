<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithLabel
{
    /**
     * Specifies a user-readable title of the element.
     */
    public function label(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Label, $value);
        
        return $this;
    }
} 
