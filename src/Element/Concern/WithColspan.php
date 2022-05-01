<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithColspan
{
    /**
     * The colspan attribute defines the number of columns a cell should span.
     */
    public function colspan(string $value, bool $append = false): static
    {
        $this->with(Attr::Colspan, $value, $append);

        return $this;
    }
} 
