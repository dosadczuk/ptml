<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSrcdoc
{
    /**
     * Specifies the HTML content of the page to show in the <iframe>.
     */
    public function withSrcdoc(string $value, bool $append = false): static
    {
        $this->with(Attr::Srcdoc, $value, $append);

        return $this;
    }
} 
