<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithImportance
{
    /**
     * Indicates the relative fetch priority for the resource.
     */
    public function importance(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Importance, $value);
        
        return $this;
    }
} 
