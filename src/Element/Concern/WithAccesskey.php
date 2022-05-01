<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAccesskey
{
    /**
     * Keyboard shortcut to activate or add focus to the element.
     */
    public function accesskey(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Accesskey, $value);
        
        return $this;
    }
} 
