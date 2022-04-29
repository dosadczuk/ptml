<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithId
{
    /**
     * Specifies a unique id for an element.
     */
    public function id(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Id, $value);
        
        return $this;
    }
}
