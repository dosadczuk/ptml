<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnpageshow
{
    /**
     * Script to be run when a user navigates to a page.
     */
    public function onpageshow(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onpageshow, $value);
        
        return $this;
    }
}
