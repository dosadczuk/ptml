<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnemptied
{
    /**
     * Script to be run when something bad happens and the file is suddenly unavailable (like unexpectedly disconnects).
     */
    public function onemptied(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onemptied, $value);
        
        return $this;
    }
}
