<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithClazz
{
    /**
     * Specifies one or more classnames for an element (refers to a class in a style sheet).
     */
    public function clazz(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Clazz, $value);
        
        return $this;
    }
}
