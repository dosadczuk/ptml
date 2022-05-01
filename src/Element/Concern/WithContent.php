<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithContent
{
    /**
     * A value associated with http-equiv or name depending on the context.
     */
    public function content(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Content, $value);
        
        return $this;
    }
} 
