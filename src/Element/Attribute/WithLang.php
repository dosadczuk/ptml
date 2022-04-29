<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithLang
{
    /**
     * Specifies the language of the element's content.
     */
    public function lang(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Lang, $value);
        
        return $this;
    }
}
