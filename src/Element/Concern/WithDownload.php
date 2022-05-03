<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDownload
{
    /**
     * Indicates that the hyperlink is to be used for downloading a resource.
     */
    public function withDownload(string $value, bool $append = true): static
    {
        $this->with(Attr::Download, $value, $append);

        return $this;
    }
    
    public function withoutDownload(): static
    {
        $this->without(Attr::Download);
        
        return $this;
    }
} 
