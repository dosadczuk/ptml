<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithReversed
{
    /**
     * Indicates whether the list should be displayed in a descending order
     * instead of a ascending.
     */
    public function reversed(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Reversed, $value);
        
        return $this;
    }
} 
