<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithCrossorigin
{
    /**
     * How the element handles cross-origin requests
     */
    public function crossorigin(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Crossorigin, $value);
        
        return $this;
    }
} 
