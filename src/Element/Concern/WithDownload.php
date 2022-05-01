<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithDownload
{
    /**
     * Indicates that the hyperlink is to be used for downloading a resource.
     */
    public function download(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Download, $value);
        
        return $this;
    }
} 
