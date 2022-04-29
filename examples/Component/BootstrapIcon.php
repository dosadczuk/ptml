<?php
declare(strict_types=1);

namespace PTML\Example\Component;

use PTML\{Aria, Attr, Element, Tag};

final class BootstrapIcon extends Element
{
    public function __construct(string $name)
    {
        parent::__construct(Tag::I);

        $this->with(Attr::Clazz, "bi bi-$name");
        $this->with(Aria::Hidden, 'true');
    }
}
