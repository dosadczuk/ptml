<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnprogress
{
    /**
     * Script to be run when the browser is in the process of getting the media data.
     */
    public function onprogress(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onprogress, $value);
        
        return $this;
    }
}
