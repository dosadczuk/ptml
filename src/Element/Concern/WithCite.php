<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithCite
{
    /**
     * Contains a URI which points to the source of the quote or change.
     */
    public function cite(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Cite, $value);
        
        return $this;
    }
} 
