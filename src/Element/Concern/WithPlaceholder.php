<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithPlaceholder
{
    /**
     * Provides a hint to the user of what can be entered in the field.
     */
    public function placeholder(string $value, bool $append = false): static
    {
        $this->with(Attr::Placeholder, $value, $append);

        return $this;
    }
} 
