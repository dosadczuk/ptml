<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithItemprop
{
    /**
     * Add properties to an item.
     */
    public function itemprop(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Itemprop, $value);
        
        return $this;
    }
} 
