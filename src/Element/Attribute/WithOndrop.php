<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOndrop
{
    /**
     * Script to be run when dragged element is being dropped.
     */
    public function ondrop(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ondrop, $value);
        
        return $this;
    }
}
