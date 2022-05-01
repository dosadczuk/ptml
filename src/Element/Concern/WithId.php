<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithId
{
    /**
     * Often used with CSS to style a specific element. The value of this
     * attribute must be unique.
     */
    public function id(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Id, $value);
        
        return $this;
    }
} 
