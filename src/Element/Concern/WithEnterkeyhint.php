<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithEnterkeyhint
{
    /**
     * The enterkeyhint specifies what action label (or icon) to present for
     * the enter key on virtual keyboards. The attribute can be used with form
     * controls (such as the value of textarea elements), or in elements in an
     * editing host (e.g., using contenteditable attribute).
     */
    public function withEnterkeyhint(string $value, bool $append = false): static
    {
        $this->with(Attr::Enterkeyhint, $value, $append);

        return $this;
    }
    
    public function withoutEnterkeyhint(): static
    {
        $this->without(Attr::Enterkeyhint);
        
        return $this;
    }
} 
