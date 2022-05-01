<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithReferrerpolicy
{
    /**
     * Specifies which referrer is sent when fetching the resource.
     */
    public function referrerpolicy(string $value, bool $append = false): static
    {
        $this->with(Attr::Referrerpolicy, $value, $append);

        return $this;
    }
} 
