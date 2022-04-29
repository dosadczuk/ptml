<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnended
{
    /**
     * Script to be run when the media has reach the end (a useful event for messages like "thanks for listening").
     */
    public function onended(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onended, $value);
        
        return $this;
    }
}
