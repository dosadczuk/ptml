<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnplaying
{
    /**
     * Script to be run when the media has started playing.
     */
    public function onplaying(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onplaying, $value);
        
        return $this;
    }
}
