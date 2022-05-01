<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAlt
{
    /**
     * Alternative text in case an image can't be displayed.
     */
    public function alt(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Alt, $value);
        
        return $this;
    }
} 
