<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithEnctype
{
    /**
     * Specifies how the form-data should be encoded when submitting it to the server (only for method="post").
     */
    public function enctype(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Enctype, $value);
        
        return $this;
    }
}
