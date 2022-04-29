<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithHref
{
    /**
     * Specifies the URL of the page the link goes to.
     */
    public function href(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Href, $value);
        
        return $this;
    }
}
