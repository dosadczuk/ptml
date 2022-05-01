<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithStyle
{
    /**
     * Defines CSS styles which will override styles previously set.
     */
    public function style(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Style, $value);
        
        return $this;
    }
} 
