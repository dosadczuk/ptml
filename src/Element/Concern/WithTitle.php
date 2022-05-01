<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithTitle
{
    /**
     * Text to be displayed in a tooltip when hovering over the element.
     */
    public function title(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Title, $value);
        
        return $this;
    }
} 
