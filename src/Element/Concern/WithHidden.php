<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithHidden
{
    /**
     * Prevents rendering of given element, while keeping child elements, e.g.
     */
    public function hidden(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Hidden, $value);
        
        return $this;
    }
} 
