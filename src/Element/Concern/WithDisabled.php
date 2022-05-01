<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDisabled
{
    /**
     * Indicates whether the user can interact with the element.
     */
    public function disabled(string $value, bool $append = false): static
    {
        $this->with(Attr::Disabled, $value, $append);

        return $this;
    }
} 
