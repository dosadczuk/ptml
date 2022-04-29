<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnbeforeprint
{
    /**
     * Script to be run before the document is printed.
     */
    public function onbeforeprint(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onbeforeprint, $value);
        
        return $this;
    }
}
