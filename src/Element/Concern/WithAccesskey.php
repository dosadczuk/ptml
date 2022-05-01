<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAccesskey
{
    /**
     * Keyboard shortcut to activate or add focus to the element.
     */
    public function withAccesskey(string $value, bool $append = false): static
    {
        $this->with(Attr::Accesskey, $value, $append);

        return $this;
    }
} 
