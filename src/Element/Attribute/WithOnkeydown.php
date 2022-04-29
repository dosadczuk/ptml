<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnkeydown
{
    /**
     * Script to be run when a user is pressing a key.
     */
    public function onkeydown(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onkeydown, $value);
        
        return $this;
    }
}
