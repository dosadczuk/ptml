<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnplay
{
    /**
     * Script to be run when the media has started playing.
     */
    public function onplay(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onplay, $value);
        
        return $this;
    }
}
