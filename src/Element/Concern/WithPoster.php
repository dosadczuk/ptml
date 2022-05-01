<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithPoster
{
    /**
     * A URL indicating a poster frame to show until the user plays or seeks.
     */
    public function poster(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Poster, $value);
        
        return $this;
    }
} 
