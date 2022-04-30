<?php
declare(strict_types=1);

namespace PTML\Test\Stub;

use PTML\Aria;
use PTML\Attr;
use PTML\Element;
use PTML\Tag;

class Icon extends Element
{
    public function __construct(string $name)
    {
        parent::__construct(Tag::I);

        $this->with(Attr::Clazz, "bi bi-$name");
        $this->with(Aria::Hidden, 'true');
    }
}
