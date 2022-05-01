<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithTabindex
{
    /**
     * Overrides the browser's default tab order and follows the one specified
     * instead.
     */
    public function tabindex(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Tabindex, $value);
        
        return $this;
    }
} 
