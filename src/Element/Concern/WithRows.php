<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithRows
{
    /**
     * Defines the number of rows in a text area.
     */
    public function rows(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Rows, $value);
        
        return $this;
    }
} 
