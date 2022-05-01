<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRows
{
    /**
     * Defines the number of rows in a text area.
     */
    public function withRows(string $value, bool $append = false): static
    {
        $this->with(Attr::Rows, $value, $append);

        return $this;
    }
} 
