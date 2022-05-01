<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithCols
{
    /**
     * Defines the number of columns in a textarea.
     */
    public function cols(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Cols, $value);
        
        return $this;
    }
} 
