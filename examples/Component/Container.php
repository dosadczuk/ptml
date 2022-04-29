<?php
declare(strict_types=1);

namespace PTML\Example\Component;

use PTML\{Attr, Element, ElementInterface, Tag};

final class Container extends Element
{
    public function __construct(ElementInterface ...$children)
    {
        parent::__construct(Tag::Div);

        $this->with(Attr::Clazz, 'container');
        $this->append(...$children);
    }
}
