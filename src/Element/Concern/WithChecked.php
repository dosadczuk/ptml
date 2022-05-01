<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithChecked
{
    /**
     * Indicates whether the element should be checked on page load.
     */
    public function checked(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Checked, $value);
        
        return $this;
    }
} 
