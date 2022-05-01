<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithClass
{
    /**
     * Often used with CSS to style elements with common properties.
     */
    public function withClass(string $value, bool $append = false): static
    {
        $this->with(Attr::Clazz, $value, $append);

        return $this;
    }
} 
