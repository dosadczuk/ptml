<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithSrcset
{
    /**
     * One or more responsive image candidates.
     */
    public function srcset(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Srcset, $value);
        
        return $this;
    }
} 
