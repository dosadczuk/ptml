<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithSize
{
    /**
     * Defines the width of the element (in pixels). If the element's type
     * attribute is text or password then it's the number of characters.
     */
    public function size(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Size, $value);
        
        return $this;
    }
} 
