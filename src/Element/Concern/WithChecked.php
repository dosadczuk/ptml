<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithChecked
{
    /**
     * Indicates whether the element should be checked on page load.
     */
    public function checked(string $value, bool $append = false): static
    {
        $this->with(Attr::Checked, $value, $append);

        return $this;
    }
} 
