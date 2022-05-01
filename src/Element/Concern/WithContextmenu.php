<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithContextmenu
{
    /**
     * Defines the ID of a <menu> element which will serve as the element's
     * context menu.
     */
    public function contextmenu(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Contextmenu, $value);
        
        return $this;
    }
} 
