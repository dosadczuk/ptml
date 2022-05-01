<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithRel
{
    /**
     * Specifies the relationship of the target object to the link object.
     */
    public function rel(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Rel, $value);
        
        return $this;
    }
} 
