<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOncuechange
{
    /**
     * Script to be run when the cue changes in a <track> element.
     */
    public function oncuechange(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Oncuechange, $value);
        
        return $this;
    }
}
