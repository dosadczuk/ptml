<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithCite
{
    /**
     * Specifies a URL which explains the quote/deleted/inserted text.
     */
    public function cite(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Cite, $value);
        
        return $this;
    }
}
