<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOntimeupdate
{
    /**
     * Script to be run when the playing position has changed (like when the user fast forwards to a different point in the media).
     */
    public function ontimeupdate(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ontimeupdate, $value);
        
        return $this;
    }
}
