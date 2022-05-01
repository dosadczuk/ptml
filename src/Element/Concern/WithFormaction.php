<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithFormaction
{
    /**
     * Indicates the action of the element, overriding the action defined in
     * the <form>.
     */
    public function formaction(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Formaction, $value);
        
        return $this;
    }
} 
