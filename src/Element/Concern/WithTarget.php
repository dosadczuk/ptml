<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithTarget
{
    /**
     * Specifies where to open the linked document (in the case of an <a>
     * element) or where to display the response received (in the case of a
     * <form> element)
     */
    public function target(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Target, $value);
        
        return $this;
    }
} 
