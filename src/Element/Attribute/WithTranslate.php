<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithTranslate
{
    /**
     * Specifies whether the content of an element should be translated or not.
     */
    public function translate(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Translate, $value);
        
        return $this;
    }
}
