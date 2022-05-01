<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithReferrerpolicy
{
    /**
     * Specifies which referrer is sent when fetching the resource.
     */
    public function referrerpolicy(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Referrerpolicy, $value);
        
        return $this;
    }
} 
