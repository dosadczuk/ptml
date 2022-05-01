<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCols
{
    /**
     * Defines the number of columns in a textarea.
     */
    public function cols(string $value, bool $append = false): static
    {
        $this->with(Attr::Cols, $value, $append);

        return $this;
    }
} 
