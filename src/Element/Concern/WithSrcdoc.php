<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSrcdoc
{
    /**
     * Specifies the HTML content of the page to show in the <iframe>.
     */
    public function withSrcdoc(string $value): static
    {
        $this->with(Attr::Srcdoc, $value);

        return $this;
    }
    
    public function withoutSrcdoc(): static
    {
        $this->without(Attr::Srcdoc);
        
        return $this;
    }
} 
