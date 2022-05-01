<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithFor
{
    /**
     * Describes elements which belongs to this one.
     */
    public function for(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::For, $value);
        
        return $this;
    }
} 
