<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithClazz
{
    /**
     * Often used with CSS to style elements with common properties.
     */
    public function clazz(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Clazz, $value);
        
        return $this;
    }
} 
