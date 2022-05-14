<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithHeaders
{
    /**
     * IDs of the <th> elements which applies to this element.
     */
    public function withHeaders(string $value): static
    {
        $this->with(Attr::Headers, $value);

        return $this;
    }
    
    public function withoutHeaders(): static
    {
        $this->without(Attr::Headers);
        
        return $this;
    }
} 
