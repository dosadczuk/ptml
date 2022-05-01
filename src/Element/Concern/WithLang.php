<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithLang
{
    /**
     * Defines the language used in the element.
     */
    public function lang(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Lang, $value);
        
        return $this;
    }
} 
