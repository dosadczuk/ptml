<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnkeypress
{
    /**
     * Script to be run when a user presses a key.
     */
    public function onkeypress(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onkeypress, $value);
        
        return $this;
    }
}
