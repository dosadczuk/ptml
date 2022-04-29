<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOnresize
{
    /**
     * Script to be run when the browser window is being resized..
     */
    public function onresize(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Onresize, $value);
        
        return $this;
    }
}
