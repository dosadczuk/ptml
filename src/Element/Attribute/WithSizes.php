<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithSizes
{
    /**
     * Specifies the size of the linked resource.
     */
    public function sizes(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Sizes, $value);
        
        return $this;
    }
}
