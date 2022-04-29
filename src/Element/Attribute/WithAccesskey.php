<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithAccesskey
{
    /**
     * Specifies a shortcut key to activate/focus an element.
     */
    public function accesskey(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Accesskey, $value);
        
        return $this;
    }
}
