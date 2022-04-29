<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOncontextmenu
{
    /**
     * Script to be run when a context menu is triggered.
     */
    public function oncontextmenu(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Oncontextmenu, $value);
        
        return $this;
    }
}
