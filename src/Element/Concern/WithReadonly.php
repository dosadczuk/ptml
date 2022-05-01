<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithReadonly
{
    /**
     * Indicates whether the element can be edited.
     */
    public function readonly(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Readonly, $value);
        
        return $this;
    }
} 
