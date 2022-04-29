<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithPoster
{
    /**
     * Specifies an image to be shown while the video is downloading, or until the user hits the play button.
     */
    public function poster(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Poster, $value);
        
        return $this;
    }
}
