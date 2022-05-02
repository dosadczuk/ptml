<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithFormmethod
{
    /**
     * If the button/input is a submit button (type="submit"), this attribute
     * sets the submission method to use during form submission (GET, POST,
     * etc.). If this attribute is specified, it overrides the method attribute
     * of the button's form owner.
     */
    public function withFormmethod(string $value, bool $append = true): static
    {
        $this->with(Attr::Formmethod, $value, $append);

        return $this;
    }
    
    public function withoutFormmethod(): static
    {
        $this->without(Attr::Formmethod);
        
        return $this;
    }
} 
