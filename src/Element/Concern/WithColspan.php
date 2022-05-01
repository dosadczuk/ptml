<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithColspan
{
    /**
     * The colspan attribute defines the number of columns a cell should span.
     */
    public function colspan(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Colspan, $value);
        
        return $this;
    }
} 
