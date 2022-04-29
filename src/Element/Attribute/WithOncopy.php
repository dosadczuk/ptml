<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOncopy
{
    /**
     * Script to be run when the content of the element is being copied.
     */
    public function oncopy(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Oncopy, $value);
        
        return $this;
    }
}
