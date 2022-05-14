<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRows
{
    /**
     * Defines the number of rows in a text area.
     */
    public function withRows(string|int $value): static
    {
        $this->with(Attr::Rows, $value);

        return $this;
    }
    
    public function withoutRows(): static
    {
        $this->without(Attr::Rows);
        
        return $this;
    }
} 
