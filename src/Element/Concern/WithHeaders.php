<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithHeaders
{
    /**
     * IDs of the <th> elements which applies to this element.
     */
    public function headers(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Headers, $value);
        
        return $this;
    }
} 
