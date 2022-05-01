<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithUsemap
{
    /**
     * Specifies an image as a client-side image map.
     */
    public function withUsemap(string $value, bool $append = false): static
    {
        $this->with(Attr::Usemap, $value, $append);

        return $this;
    }
    
    public function withoutUsemap(): static
    {
        $this->without(Attr::Usemap);
        
        return $this;
    }
} 
