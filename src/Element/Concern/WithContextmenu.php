<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithContextmenu
{
    /**
     * Defines the ID of a <menu> element which will serve as the element's
     * context menu.
     */
    public function contextmenu(string $value, bool $append = false): static
    {
        $this->with(Attr::Contextmenu, $value, $append);

        return $this;
    }
} 
