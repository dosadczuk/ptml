<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithPing
{
    /**
     * The ping attribute specifies a space-separated list of URLs to be
     * notified if a user follows the hyperlink.
     */
    public function ping(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ping, $value);
        
        return $this;
    }
} 
