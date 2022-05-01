<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSrclang
{
    /**
     * Specifies the language of the track text data (required if
     * kind="subtitles").
     */
    public function withSrclang(string $value, bool $append = false): static
    {
        $this->with(Attr::Srclang, $value, $append);

        return $this;
    }
} 
