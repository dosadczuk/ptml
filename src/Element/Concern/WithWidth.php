<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithWidth
{
    /**
     * For the elements listed here, this establishes the element's width.
     */
    public function width(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Width, $value);
        
        return $this;
    }
} 
