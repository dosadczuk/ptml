<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnunload
{
    /**
     * Script to be run when a page has unloaded (or the browser window has been closed).
     */
    public function onunload(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onunload, $value);
        
        return $this;
    }
}
