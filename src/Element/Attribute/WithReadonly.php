<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithReadonly
{
    /**
     * Specifies that the element is read-only.
     */
    public function readonly(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Readonly, $value);
        
        return $this;
    }
}
