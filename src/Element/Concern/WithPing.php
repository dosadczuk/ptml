<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithPing
{
    /**
     * The ping attribute specifies a space-separated list of URLs to be
     * notified if a user follows the hyperlink.
     */
    public function withPing(string|array $value): static
    {
        $this->with(Attr::Ping, $value);

        return $this;
    }
    
    public function withoutPing(): static
    {
        $this->without(Attr::Ping);
        
        return $this;
    }
} 
