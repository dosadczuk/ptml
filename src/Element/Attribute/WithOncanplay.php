<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOncanplay
{
    /**
     * Script to be run when a file is ready to start playing (when it has buffered enough to begin).
     */
    public function oncanplay(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Oncanplay, $value);
        
        return $this;
    }
}
