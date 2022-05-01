<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithStyle
{
    /**
     * Defines CSS styles which will override styles previously set.
     */
    public function style(string $value, bool $append = false): static
    {
        $this->with(Attr::Style, $value, $append);

        return $this;
    }
} 
