<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithCharset
{
    /**
     * Specifies the character encoding.
     */
    public function charset(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Charset, $value);
        
        return $this;
    }
}
