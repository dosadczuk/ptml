<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithDownload
{
    /**
     * Specifies that the target will be downloaded when a user clicks on the hyperlink.
     */
    public function download(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Download, $value);
        
        return $this;
    }
}
