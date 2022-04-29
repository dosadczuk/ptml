<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnwaiting
{
    /**
     * Script to be run when the media has paused but is expected to resume (like when the media pauses to buffer more data).
     */
    public function onwaiting(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onwaiting, $value);
        
        return $this;
    }
}
