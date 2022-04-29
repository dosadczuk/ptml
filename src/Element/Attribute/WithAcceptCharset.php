<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithAcceptCharset
{
    /**
     * Specifies the character encodings that are to be used for the form submission.
     */
    public function acceptCharset(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::AcceptCharset, $value);
        
        return $this;
    }
}
