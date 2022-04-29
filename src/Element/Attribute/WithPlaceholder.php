<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithPlaceholder
{
    /**
     * Specifies a short hint that describes the expected value of the element.
     */
    public function placeholder(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Placeholder, $value);
        
        return $this;
    }
}
