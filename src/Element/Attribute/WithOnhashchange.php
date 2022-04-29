<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnhashchange
{
    /**
     * Script to be run when there has been changes to the anchor part of the a URL.
     */
    public function onhashchange(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onhashchange, $value);
        
        return $this;
    }
}
