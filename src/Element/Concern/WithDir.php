<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithDir
{
    /**
     * Defines the text direction. Allowed values are ltr (Left-To-Right) or
     * rtl (Right-To-Left)
     */
    public function dir(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Dir, $value);
        
        return $this;
    }
} 
