<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithTarget
{
    /**
     * Specifies where to open the linked document (in the case of an <a>
     * element) or where to display the response received (in the case of a
     * <form> element)
     */
    public function target(string $value, bool $append = false): static
    {
        $this->with(Attr::Target, $value, $append);

        return $this;
    }
} 
