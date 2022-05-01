<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithInputmode
{
    /**
     * Provides a hint as to the type of data that might be entered by the user
     * while editing the element or its contents. The attribute can be used
     * with form controls (such as the value of textarea elements), or in
     * elements in an editing host (e.g., using contenteditable attribute).
     */
    public function inputmode(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Inputmode, $value);
        
        return $this;
    }
} 
