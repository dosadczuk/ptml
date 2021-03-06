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
    public function withContextmenu(string $value): static
    {
        $this->with(Attr::Contextmenu, $value);

        return $this;
    }
    
    public function withoutContextmenu(): static
    {
        $this->without(Attr::Contextmenu);
        
        return $this;
    }
} 
