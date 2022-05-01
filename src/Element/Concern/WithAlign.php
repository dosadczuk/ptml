<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAlign
{
    /**
     * Specifies the horizontal alignment of the element.
     */
    public function align(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Align, $value);
        
        return $this;
    }
} 
