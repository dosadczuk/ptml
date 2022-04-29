<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOndragover
{
    /**
     * Script to be run when an element is being dragged over a valid drop target.
     */
    public function ondragover(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ondragover, $value);
        
        return $this;
    }
}
