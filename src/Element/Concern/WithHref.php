<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithHref
{
    /**
     * The URL of a linked resource.
     */
    public function href(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Href, $value);
        
        return $this;
    }
} 
