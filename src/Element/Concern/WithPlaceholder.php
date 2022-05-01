<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithPlaceholder
{
    /**
     * Provides a hint to the user of what can be entered in the field.
     */
    public function placeholder(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Placeholder, $value);
        
        return $this;
    }
} 
