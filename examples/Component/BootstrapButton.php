<?php
declare(strict_types=1);

namespace PTML\Example\Component;

use PTML\{Attr, Element, Tag};

final class BootstrapButton extends Element
{
    public function __construct(string $accent, \Stringable|string $text)
    {
        parent::__construct(Tag::Button, $text);

        $this->with(Attr::Clazz, "btn btn-$accent");
    }
}
