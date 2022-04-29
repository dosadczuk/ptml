<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithSrclang
{
    /**
     * Specifies the language of the track text data (required if kind="subtitles").
     */
    public function srclang(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Srclang, $value);
        
        return $this;
    }
}
