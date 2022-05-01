<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithDefault
{
    /**
     * Indicates that the track should be enabled unless the user's preferences
     * indicate something different.
     */
    public function default(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Default, $value);
        
        return $this;
    }
} 
