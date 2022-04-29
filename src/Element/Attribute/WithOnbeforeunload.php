<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnbeforeunload
{
    /**
     * Script to be run when the document is about to be unloaded.
     */
    public function onbeforeunload(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onbeforeunload, $value);
        
        return $this;
    }
}
