<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithTitle
{
    /**
     * Text to be displayed in a tooltip when hovering over the element.
     */
    public function title(string $value, bool $append = false): static
    {
        $this->with(Attr::Title, $value, $append);

        return $this;
    }
} 
