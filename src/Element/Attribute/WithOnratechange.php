<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnratechange
{
    /**
     * Script to be run each time the playback rate changes (like when a user switches to a slow motion or fast forward mode)..
     */
    public function onratechange(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onratechange, $value);
        
        return $this;
    }
}
