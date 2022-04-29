<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnoffline
{
    /**
     * Script to be run when the browser starts to work offline.
     */
    public function onoffline(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onoffline, $value);
        
        return $this;
    }
}
